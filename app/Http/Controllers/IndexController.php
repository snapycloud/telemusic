<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getHome()
    {
    	
    	return view('home', [
    		'status' => false
    	]);
    }
}
