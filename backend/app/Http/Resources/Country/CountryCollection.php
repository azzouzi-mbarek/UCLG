<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\Resource;

class CountryCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'href' => [
                'link' => route('countries.show', [$this->region->id, $this->id])
            ]
        ];
    }
}
