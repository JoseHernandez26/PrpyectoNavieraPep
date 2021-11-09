<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canton extends Model
{
    use HasFactory;
    
    public function path(){   
        return '/canton/'.$this->name; 
       }
}
