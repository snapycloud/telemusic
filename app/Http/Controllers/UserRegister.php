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
    		return back()->withInput()->withErrors(['msg', 'The Message']);;
    	}
    	
    	$this->register($userName, $lastName, $phoneNumber);

    	return view('success');
    }
}
