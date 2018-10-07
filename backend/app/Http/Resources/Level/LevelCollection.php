<?php

namespace App\Http\Resources\Level;

use App\Models\Country;
use App\Models\Level\Level;
use Illuminate\Http\Resources\Json\JsonResource;

class LevelCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {




        return [

            'id' => $this->id,
            'nom' => $this->name,
            'country_id' => $this->country_id,
            'level_id' => $this->level ,
            'emp' => 'levelCollection',

            'detail_level' => [
                'link' => (function () {

                    $region_id = Country::find($this->country_id)->region->id;
                    return route('levels.show' , [$region_id , $this->country_id , $this->id]) ;

                })()
            ],
        ];
    }
}
