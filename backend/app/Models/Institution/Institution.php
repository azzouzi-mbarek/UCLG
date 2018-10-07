<?php

namespace App\Models\Institution;

use App\Models\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable =[
        "name",
        "image",
        "acronym",
        "description",
        "foundation_year",
        "country_seat",
        "areas_intervention",
        "target_beneficiary",
        "web_site",
        "email",
        "number_phone",
        "address",
    ];

    public function Levels()
    {
        return $this->belongsToMany(Level::class)
            ->withPivot('category_level_institution_id','level_id','institution_id');
    }
}
