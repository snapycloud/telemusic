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
}
