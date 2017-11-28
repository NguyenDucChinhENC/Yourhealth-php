<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Auth;
use App\Program;
use Faker\Factory as Faker;

class RegistrationController extends Controller
{
    public function create(Request $request){
        $faker = Faker::create();
        $id= Auth::user()->id;
        $registration = new Registration();
        $registration->user_id = Auth::user()->id;
        $registration->program_id = $request->program_id;
        $registration->save();
        return redirect()->back();

    }

    public function index(){
        $user = Auth::user();
        $registration = Registration::where('user_id', Auth::user()->id)->paginate(3);
        $programs=[];
        for($i=0; $i<count($registration); $i++){
            $program = Program::where('id',$registration[$i]->program_id)->first();
            array_push($programs,$program);
        }
        return view('registration.index')->with('user',$user)->with('programs', $programs)->with('registration', $registration);
    }
}
