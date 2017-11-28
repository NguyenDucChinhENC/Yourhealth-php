<?php

namespace App\Http\Controllers;



use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class UpdateUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        $user = Auth::user();
        return view('user.edit', ['user'=>$user]);
    }

    public function postedit(Request $request){
         $this->validate($request,
            [
                'name'=>'required|min:3',
                'username'=>'required|min:3',
                'birthday'=>'date',
                'weight'=>'numeric'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên phải có ít nhất 3 kí tự',
                'username.required'=>'Bạn chưa nhập Username',
                'username.min'=>'Username phải có ít nhất 3 kí tự',
                'birthday.date'=>'Birthday chưa đúng định dạng date',
                'weight.numeric'=>'weight phải là kiểu số'
            ]);
        $user = Auth::user();
        $user->username=$request->username;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->birthday=$request->birthday;
        $user->address=$request->address;
        $user->weight=$request->weight;
        $user->job=$request->job;
        $user->save();
        return redirect()->back()->with('thongbao','Update thông tin thành công');
    }


}
