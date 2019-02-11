<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegister extends Controller
{
    public function postRegister(Request $request)
    {
    	$request->validate([
    		'userName' => 'email|required',
    		'lastName' => 'required',
    		'phoneNumber' => 'required'
    	]);

    	$userName = $request->get('userName');
    	$lastName = $request->get('lastName');
    	$phoneNumber = $request->get('phoneNumber');

    	if($this->userExists($userName)) {
    		return back()->withInput()->withErrors(['msg', 'The Message']);
    	}
    	
    	$this->register($userName, $lastName, $phoneNumber);

    	return view('home', [
            'status' => true
        ]);
	}

    public function sendClientOtp(Request $request)
    {
        $request->validate([
            'phoneNumber' => 'required'
        ]);

        $phoneNumber = $request->get('phoneNumber');

        $this->sendOtp($phoneNumber);
        
        return view('event', 
            ['status' => false,'video' => false, 'event' => false, 'otp' => $phoneNumber, 'otp_error' => false]
        );
    }

	

	public function postOtp(Request $request)
	{
		$request->validate([
            'phoneNumber' => 'required',
            'code' => 'required'
		]);

        $phoneNumber = $request->get('phoneNumber');
        $code = $request->get('code');
        $result = $this->checkOtp($phoneNumber, $code);
        

        if(!$result){
            return view('event', 
                ['status' => false,'video' => false, 'event' => false, 'otp' => $phoneNumber, 'otp_error' => true]
            );
        }
		
		$client = $this->clientExists($phoneNumber);
        
		
        if (!$client['total']) {
 	        $client = $this->createClient($phoneNumber);
        }
		
		$event = $this->getNewEvent();

        if ($event['total']) {
            $event = $event['list'][0];
        } else {
            $event = false;
		}

        return view('video', 
            ['status' => false,'video' => $event, 'event' => false]
        );
	}



}
