<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use PHPUnit\Framework\Constraint\Count;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }

    public function login_check(Request $request){
        $valid = $request->validate([
            'name' => 'required|min:4|max:100',
            'password' => 'required|min:4|max:100'
            ]);
        $users = DB::table('login_models')->where([
            ['login' , '=', $request->input('name')],
            ['password', '=' , $request->input('password')],
        ])->get();
        if(count($users) > 0){
            return 'Hi friend';
        }else{
            return 'I dont know you';
        }
    }

    public function registration_check(Request  $request){
        $valid = $request->validate([
            'name' => 'required|min:4|max:100',
            'password' => 'required|min:4|max:100'
        ]);

        $user = new LoginModel();
        $user->login = $request->input('name');
        $user->password = $request->input('password');

        $user->save();

        return redirect()->route('about');
    }
}
