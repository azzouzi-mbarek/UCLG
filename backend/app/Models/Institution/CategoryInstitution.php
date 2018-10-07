<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Model;

class CategoryInstitution extends Model
{
    public  function  Institution(){
        return $this->hasMany(Institution::class);
    }
}
