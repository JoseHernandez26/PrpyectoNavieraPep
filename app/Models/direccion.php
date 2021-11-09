<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    use HasFactory;

    public function path(){
  
        return '/direccion/'.$this->address;
   
       }
}
