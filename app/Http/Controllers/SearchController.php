<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Program;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function result(Request $request){
        $content = $request->content;
        $lists = [];
        $coachs = User::where('name','like','%'.$content.'%')->where('coach','=','1')->get();
        for ($i=0;$i<count($coachs); $i++){
            $programs = Program::where('user_id',$coachs[$i]->id)->get();
            array_push($lists,$programs);
        }
        return view('search.result')->with('coachs', $coachs)->with('lists', $lists)->with('key', $content);
    }
}
