<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function index(){
        return view('index');
    }
    public function connect(){

        request()->validate([
            'email'=>['required','email'],
            'password'=>['required','min:6'],

            ]);
       $auth= auth()->attempt([
            'email'=>request('email'),
            'password'=>request('password'),
        ]);
            if($auth){
                return redirect('/homme');
            }

            dump($auth);
    }
}
