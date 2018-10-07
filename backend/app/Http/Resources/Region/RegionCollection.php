<?php

namespace App\Http\Resources\Region;

use Illuminate\Http\Resources\Json\Resource;

class RegionCollection extends Resource
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
                'link' => route('regions.show', $this->id)
            ]
        ];
    }
}
