<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //copio l metodo de la clase model para poder modificarlo
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
