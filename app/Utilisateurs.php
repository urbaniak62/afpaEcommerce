<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    protected $fillable=[
        'civilite','nom','prenom','email','password',
        'numRue','nomRue','ville','cp','telDom','telPort',
        'connu'
    ];
}
