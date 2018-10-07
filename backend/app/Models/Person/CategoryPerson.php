<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Model;

class CategoryPerson extends Model
{
    protected $table = 'category_persons';

    public  function  Persons(){
        return $this->belongsToMany(Person::class);
    }
    public  function  LevelPersons(){
        return $this->belongsToMany(LevelPerson::class);
    }

}
