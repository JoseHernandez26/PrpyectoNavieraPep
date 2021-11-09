<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    use HasFactory;

    public function path(){   
        return '/pasajero/'.$this->id; 
       }
}
