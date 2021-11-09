<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encargadoDeViaje extends Model
{
    use HasFactory;
    
    public function path(){   
        return '/encargadoDeViaje/'.$this->id; 
       }
}
