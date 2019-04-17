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
        $url = 'https://server.app.snapycloud.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('2434bacac4b4abf96d0d7fb0ec19fc5c');
        $this->client->setSecretKey('769fce1f0b7264f9c9371f1cb9598662');
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
    		'assignedUserId' => 1,
    		'status' => 'New',
    		'site' => 1,
    		'email' => $request->get('email'),
    		'description' => $request->get('message')
    	];
    	$ticket = $this->client()->request('POST', 'Case', $data);

    	return $ticket;
    }
}
