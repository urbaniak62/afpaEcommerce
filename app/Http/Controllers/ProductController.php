<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('ajouter');
    }

    public function addProduct(){
        request()->validate([
            'titre'=>['require'],
            'prix'=>['require','integer'],
            'descriptionProduit'=>['require'],
            'reference'=>['require'],
            'image'=>['require','image'],
            'taille'=>['require'],
            'couleur'=>['require'],
        ]);
        
        $product = Products::create([
            'titre'=>request('titre'),
            'prix'=>request('prix'),
            'descriptionProduit'=>request('descriptionProduit'),
            'reference'=>request('reference'),
            $path='image'=>request('image')->store('image','public'),
            'taille'=>request('taille'),
            'couleur'=>request('couleur'),
        ]);
    }
}
