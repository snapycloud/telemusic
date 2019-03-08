<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegister extends Controller
{
    public function postRegister(Request $request)
    {
    	$request->validate([
    		'email' => 'email|required',
    		'name' => 'required'
    	]);

    	$name = $request->get('name');
    	$email = $request->get('email');

    	if($this->userExists($email)) {
    		return response('Conflict', 409);
    	}
    	
    	return $this->register($email, $name);
	}

    public function sendClientOtp(Request $request)
    {
        $request->validate([
            'phoneNumber' => 'required|regex:/(09)[0-9]{9}/'
        ]);

        $phoneNumber = $request->get('phoneNumber');


        return $this->sendOtp($phoneNumber);
    }

    public function getEvent(Request $request)
    {
        $request->validate([
            'phoneNumber' => 'required|regex:/(09)[0-9]{9}/'
        ]);

        $phoneNumber = $request->get('phoneNumber');


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

        return $event;
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
            ['status' => false,'video' => $event, 'event' => false, 'otp' => false, 'otp_error' => false]
        );
	}



}
