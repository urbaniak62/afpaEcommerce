<?php

namespace App\Http\Controllers;

use App\Utilisateurs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function liste(){
        $utilisateurs= Utilisateurs::all();
    return view('admin',[
        'utilisateurs'=>$utilisateurs,
    ]);
    dd($utilisateurs);
    }
}
