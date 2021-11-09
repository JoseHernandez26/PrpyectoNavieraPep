<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifiestoPasajeros extends Model
{
    use HasFactory;

    public function path(){   
        return '/manifiestoPasajeros/'.$this->id; 
       }
}
