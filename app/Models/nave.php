<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nave extends Model
{
    use HasFactory;

    public function path(){   
        return '/nave/'.$this->id; 
       }
}
