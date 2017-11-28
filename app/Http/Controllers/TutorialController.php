<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Auth;

class TutorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getInfo(){
        return view('tutorial.getInfo');
    }

    public function index(Request $request){
        $age = $request->age;
        $height = $request->height;
        $weight = $request->weight;
        if ($age <= 40) {
            if ($weight >= ($height-100)){
                $type = 2;
                }
        } elseif ($age > 50){
            $type = 0;
        } else {
            $type =1;
        }

        $programs = Program::where('type',$type)->paginate(2);
        return view('tutorial.index')->with('re', $request)->with('programs', $programs);
    }
}
