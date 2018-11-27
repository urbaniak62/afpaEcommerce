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
            'titre'=>['required'],
            'prix'=>['required','integer'],
            'nomProduit'=>['required'],
            'descriptionProduit'=>['required'],
            'reference'=>['required'],
            'image'=>['required','image'],
            'taille'=>['required'],
            'couleur'=>['required'],
        ]);
        
        $product = Products::create([
            'titre'=>request('titre'),
            'prix'=>request('prix'),
            'nomProduit'=>request('nomProduit'),
            'descriptionProduit'=>request('descriptionProduit'),
            'reference'=>request('reference'),
            $path='image'=>request('image')->store('image','public'),
            'taille'=>request('taille'),
            'couleur'=>request('couleur'),
        ]);
      
    }
    public function store(){
        $products= Products::all();
    return view('homme',[
        'products'=>$products,
    ]);
    dd($products);
    }
}
