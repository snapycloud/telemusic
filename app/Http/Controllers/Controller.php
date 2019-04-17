<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use SnapyCloud\PhpApi\Client\SnapyClient;
use Illuminate\Http\Request;
use App\Telemusic\Api as TelemusicApi;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,  TelemusicApi;

    protected $client;

    public function __construct()
    {
        $url = 'https://backend.telemusic.ir';
        $this->client = new SnapyClient($url, 'support', 'ikbiyxas');
    }

    public function client()
    {
        return $this->client;
    }

    public function getLanding()
    {
    	return view('landing');
    }

    public function postCase(Request $request)
    {
    	$request->validate([
    		'email' => 'email|required',
    		'name' => 'required',
    		'message' => 'required'
    	]);
    	
    	$data = [
    		'priority' => 'Normal',
    		'assignedUserId' => "5cb6cda16e15a3534",
    		'assignedUserName' => "Support",
    		'status' => 'New',
    		'name' => $request->get('name'),
    		'web' => 1,
    		'email' => $request->get('email'),
    		'description' => $request->get('message')
    	];
    	$ticket = $this->client()->request('POST', 'Case', $data);

    	return $ticket;
    }
}
