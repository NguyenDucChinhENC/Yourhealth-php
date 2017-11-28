<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class InfoUserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function get(){
    	return view('infoUser');
    }
}
