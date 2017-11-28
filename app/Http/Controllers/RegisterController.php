<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegisterController extends Controller
{
    public function create(){
    	return view('registration.create');
    }

    public function store(){
    	$user = User::create(request(['name','email','password','username','coach','practitioner', 'birthday', 'address', 'weight', 'job']));
    	auth()->login($user);
    }
}
