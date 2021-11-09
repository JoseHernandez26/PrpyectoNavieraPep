<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifiestoCarga extends Model
{
    use HasFactory;
        
    public function path(){   
        return '/manifiestoCarga/'.$this->id; 
       }
}
