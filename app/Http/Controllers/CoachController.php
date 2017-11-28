<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\User;

class CoachController extends Controller
{
    public function show($id){
        $coach = User::where('id', $id)->where('coach','1')->first();
        if (isset($coach)) {
            $programs = Program::where('user_id', $coach->id)->orderBy('created_at', 'DESC')->paginate(2);;
            return view('coach.show')->with('coach', $coach)->with('programs', $programs);
        } else {
            return redirect('/home');
        }
    }
}
