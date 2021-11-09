<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barrio extends Model
{
    use HasFactory;

    public function path(){

        
        return '/barrio/'.$this->name;
   
   
       }

}
