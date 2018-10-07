<?php

namespace App\Models\Indicator;

use App\Models\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $fillable =[
        "name"
    ];
    public  function  Levels(){
        return $this->belongsToMany(Level::class);
    }
}
