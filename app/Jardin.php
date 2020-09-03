<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $fillable = [
        'nom', 'image', 'description', 'nom_botanique', 'info_plante', 'particularites', 'avantages','exposition','sol','quand_semer','comment_semer'
    ];
}
