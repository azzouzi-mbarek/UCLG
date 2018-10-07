<?php

namespace App\Models\Level;

use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    protected $fillable=[
        "population"
    ];
    public  function  Level(){
        return $this->belongsTo(Level::class);
    }
}
