<?php

namespace App\Http\Controllers;


use App\Utilisateurs;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription');
    }
    public function  traitement(){
        request()->validate([
            'civilite'=>['required'],
            'nom'=>['required'],
            'prenom'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','confirmed','min:6'],
            'password_confirmation'=>['required'],
            'numRue'=>['required','integer'],
            'nomRue'=>['required'],
            'ville'=>['required'],
            'cp'=>['required','integer'],
            'telPort'=>['nullable','integer'],
            'telDom'=>['nullable','integer'],
            'connu'=>['nullable'],
        ]);
            $utilisateur =  \App\Utilisateurs::create([
                'civilite'=>request('civilite'),
                'nom'=>request('nom'),
                'prenom'=>request('prenom'),
                'email'=>request('email'),
                'password'=>bcrypt(request('paswword')),
                'numRue'=>request('numRue'),
                'nomRue'=>request('nomRue'),
                'ville'=>request('ville'),
                'cp'=>request('cp'),
                'telDom'=>request('telDom'),
                'telPort'=>request('telPort'),
                'connu'=>request('connu'),
            ]);
                dd($utilisateur);
    }
}
