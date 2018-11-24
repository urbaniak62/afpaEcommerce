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
        // request()->validate([
        //     'civilite'=>['require'],
        //     'nom'=>['require'],
        //     'prenom'=>['require'],
        //     'email'=>['require','email'],
        //     'password'=>['require','confirmed','min:6'],
        //     'numRue'=>['require'],
        //     'nomRue'=>['require'],
        //     'ville'=>['require'],
        //     'cp'=>['require'],
        //     'telPort'=>['nullable'],
        //     'telDom'=>['nullable',],
        //     'connu'=>['nullable'],
        // ]);
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
