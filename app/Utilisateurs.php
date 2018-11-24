<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Utilisateurs extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable=[
        'civilite','nom','prenom','email','password',
        'numRue','nomRue','ville','cp','telDom','telPort',
        'connu'
    ];

}
