<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Model;

class LevelPerson extends Model
{
    protected  $table='level_person';
    public  function  CategoryPersons(){
        return $this->hasMany(CategoryPerson::class);
    }
}
