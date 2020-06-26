<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "first_name" => ucfirst($this->first_name),
            "last_name" => ucfirst($this->last_name),
            "full_name" => $this->fullName(),
            "skill" => $this->skill,
            "age" => $this->age,
            "position" => $this->position,
        ];
    }
}
