<?php

namespace App\Models\Level;

use Illuminate\Database\Eloquent\Model;

class CategoryLevel extends Model
{
    public  function  Level(){
        return $this->hasMany(Level::class);
    }
}
