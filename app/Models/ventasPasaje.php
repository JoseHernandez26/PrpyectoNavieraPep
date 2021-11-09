<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventasPasaje extends Model
{
    use HasFactory;
        
    public function path(){   
        return '/ventasPasaje/'.$this->id; 
       }
}
