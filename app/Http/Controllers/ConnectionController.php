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
    //    $auth= auth()->attempt([
    //         'email'=>request('email'),
    //         'password'=>request('password'),
    //     ]);
    //         if($auth){
    //             return redirect('/homme');
    //         }

    //         dump($auth);
    /*
    request([
        'name','password'
    ]) 
    */

    echo bcrypt( 'chniak24dec78'); 
    $connection = auth()->attempt( ['email' => 'urbaniak.n78@gmail.com', "password" => '$2y$10$RCPdh3osGqL1xOKp5nasge4AUdCrJAqBcwbG8OZPOnlS6ctaHZu4u' ] );
    if($connection){
        return redirect('/homme');
    }
    dd($connection);
     }
   
}
