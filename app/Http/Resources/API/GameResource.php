<?php

namespace App\Http\Resources\API;

use App\Http\Resources\API\TeamResource;

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
            "winner" => 0,
            // team resources are altering how the api is displaying these 1-2-many relationships on response
            "team_1" => new TeamResource($this->teams()->firstWhere("side", 1)),
            "team_2" => new TeamResource($this->teams()->firstWhere("side", 2)),
        ];
    }
}
