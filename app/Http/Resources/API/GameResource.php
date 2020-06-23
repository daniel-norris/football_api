<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            "players_per_side" => $this->players_side,
            "team_1" => $this->teams()->find(1),
            "team_2" => $this->teams()->find(3),
        ];
    }
}
