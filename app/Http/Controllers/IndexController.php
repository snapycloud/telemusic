<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getHome()
    {

        $event = $this->getNewEvent();

        if($event['total']) {
            $event = $event['list'][0];

        } else {
            $event = false;
        }


    	
    	return view('home', [
            'status' => false,
            'event' => $event
    	]);
    }
}
