<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;






    public function path(){

        
     return '/provincia/'.$this->name;



    }
}
