<?php

namespace App\Models;

use App\Models\Level\Level;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
    ];
    public  function  Region(){
        return $this->belongsTo(Region::class);
    }

    public  function  Levels(){
        return $this->hasMany(Level::class);
    }
    public  function  Persons(){
        return $this->belongsToMany(Person::class)
            ->withPivot('category_person_id','country_id','person_id');
    }
}
