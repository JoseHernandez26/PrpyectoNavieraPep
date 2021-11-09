<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    use HasFactory;

    public function path(){   
        return '/sucursal/'.$this->cityPrefix; 
       }
}
