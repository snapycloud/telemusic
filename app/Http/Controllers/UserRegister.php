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
	

	public function postOtp(Request $request)
	{
		$request->validate([
            'phoneNumber' => 'required'
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
		
		return view('live', [
			'status' => false,'video' => $event, 'event' => false
			]);

		
	}

}
