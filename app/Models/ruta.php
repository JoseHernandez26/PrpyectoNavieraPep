<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    use HasFactory;

    public function path(){  
        return '/ruta/'.$this->name;
       }
}
