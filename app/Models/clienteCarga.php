<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clienteCarga extends Model
{
    use HasFactory;
        
    public function path(){   
        return '/clienteCarga/'.$this->id; 
       }
}
