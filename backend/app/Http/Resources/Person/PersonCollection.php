<?php

namespace App\Http\Resources\Person;

use App\Models\Country;
use App\Models\Level\Level;
use App\Models\Person\CategoryPerson;
use App\Models\Person\LevelPerson;
use App\Models\Person\Person;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonCollection extends JsonResource
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
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
////            'category_person' => CategoryPerson::find(LevelPerson::find($this->id)->category_person_id)->name,
//            'level_id' => $this->pivot->level_id,
//            'created_at' => $this->pivot->created_at,
//            'country_id' => Level::find($this->pivot->level_id)->country->id,
//            'region_id' => Country::find(Level::find($this->pivot->level_id)->country_id)->region_id,
//            'profile' => [
//                'link' => (function () {
//                    $level_id = $this->pivot->level_id;
//                    $country_id = Level::find($this->pivot->level_id)->country->id;
//                    $region_id = Country::find(Level::find($this->pivot->level_id)->country_id)->region_id;
//                    return route('persons.show', [$region_id, $country_id, $level_id, $this->id]);
//                })()
//            ],
        ];
    }
}
