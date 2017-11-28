<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Registration;
use App\Action;
use App\User;
use Auth;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $program = Program::where('id',$id)->first();
        $registration = Registration::where('user_id',Auth::user()->id)->where('program_id',$id)->first();
        $coach = User::where('id', $program->user_id)->first();
        $actions = Action::where('program_id',$id)->get()->groupBy('day');
        return view('program.show')->with('program', $program)->with('registration', $registration)->with('actions', $actions)->with('coach', $coach);
    }
}
