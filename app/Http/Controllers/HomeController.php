<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::orderBy('created_at', 'DESC')->paginate(4);

        return view('home')->with('programs', $programs);
    }
}
