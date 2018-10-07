<?php

namespace App\Models\Level;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable =[
        "name"
    ];
    public  function  Level(){
        return $this->belongsTo(Level::class);
    }
}
