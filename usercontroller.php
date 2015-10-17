<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class usercontroller extends Controller
{
	public function register(){
		$input=Request::all();
		return $input;

		
	}
    
}
