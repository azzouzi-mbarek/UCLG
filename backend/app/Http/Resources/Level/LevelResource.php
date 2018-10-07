<?php

namespace App\Http\Resources\Level;

use App\Models\Country;
use App\Models\Level\CategoryLevel;
use App\Models\Level\Level;
use Illuminate\Http\Resources\Json\JsonResource;

class LevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category_level' => CategoryLevel::find($this->category_level_id)->name,
            'region_name' => $this->country->region->name,
            'region_id' => $this->country->region->id,
            'country_name' => $this->country->name,
            'country_id' => $this->country_id,
            'numbre_cl_inclus'=> Level::all()->where('level_id',$this->id)->count(),
            'population' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region_id;
                    return route('population.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'legal_framework' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('legal_frameworks.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'leaderships' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('persons.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'communication_tools' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('communication_tools.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'finances' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('finances.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'evenements' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('evenements.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'programmes' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('programmes.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'Partenaires' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('institutions.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],

            'Indicators of transparency' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('indicators.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],

            'level_id' => $this->level,
            'emp' => 'LevelResource',
            'key' => $this->key,
            'href' => [
                'child_levels ' => (function () {

                    $region_id = Country::find($this->country_id)->region->id;
                    return route('levels.index', [$region_id, $this->country_id, 'id' => $this->id]);

                })()
            ]
        ];
    }
}
