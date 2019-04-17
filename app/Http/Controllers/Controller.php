<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Telemusic\Api as TelemusicApi;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,  TelemusicApi;

    public function getLanding()
    {
    	return view('landing');
    }

    public function postCase(Request $request)
    {
    	$request->validate([
    		'email' => 'email|required',
    		'name' => 'required'
    	]);
    	
    	$data = [
    		'priority' => 'Normal',
    		'assignedUserId' => 1,
    		'status' => 'New',
    		'site' => 1,
    		'email' => $request->get('email'),
    		'description' => $request->get('message')
    	];
    }
}
