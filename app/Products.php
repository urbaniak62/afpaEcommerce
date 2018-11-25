<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
        'titre','prix','nomProduit','descriptionproduit',
        'reference','image','taille','couleur'
    ];
}
