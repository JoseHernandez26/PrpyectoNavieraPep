<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservaCarga extends Model
{
    use HasFactory;
        
    public function path(){   
        return '/reservaCarga/'.$this->id; 
       }
}
