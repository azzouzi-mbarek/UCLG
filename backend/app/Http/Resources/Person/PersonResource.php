<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'image' => $this->image,
            'sex' => $this->sex,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birthday' => $this->birthday,
            'nationality' => $this->nationality,
            'academic-level' => $this->academic_level,
            'study_area' => $this->study_area,
            'email' => $this->email,
            'number_phone' => $this->number_phone,
            'levels' =>$this->Levels,
//                [
//                function () {
//                    foreach ($this->Levels as $level) {
//                        return $level;
//                     }
//                }
//
//            ]

        ];
    }
}
