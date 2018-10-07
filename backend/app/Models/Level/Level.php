<?php

namespace App\Models\Level;

use App\Models\Country;
use App\Models\Indicator\Indicator;
use App\Models\Institution\Institution;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
    public function CategoryLevel()
    {
        return $this->belongsTo(CategoryLevel::class);
    }
    public function level(){
        return $this->belongsTo(Level::class, 'id', 'level_id');
    }

    public function levels(){
        return $this->hasMany(Level::class, 'level_id', 'id');
    }
    public  function  Population(){
        return $this->hasMany(Population::class);
    }
    public  function  LegalFramework(){
        return $this->hasMany(LegalFramework::class);
    }
    public  function  CommunicationTool(){
        return $this->hasMany(CommunicationTool::class);
    }
    public  function  Finance(){
        return $this->hasMany(Finance::class);
    }
    public  function  Evenement(){
        return $this->hasMany(Evenement::class);
    }
    public  function  Programme(){
        return $this->hasMany(Programme::class);
    }
    public  function  Persons(){
        return $this->belongsToMany(Person::class)
            ->withPivot('category_person_id','level_id');
    }
    public  function  Institutions(){
        return $this->belongsToMany(Institution::class)
            ->withPivot('category_level_institution_id','level_id','institution_id');
    }
    public  function  Indicators(){
        return $this->belongsToMany(Indicator::class)
            ->withPivot('created_at','note');
    }
}
