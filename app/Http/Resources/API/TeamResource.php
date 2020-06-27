<?php

namespace App\Http\Resources\API;

use App\Http\Resources\API\PlayerResource;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\API\PlayerCollectionResource;

class TeamResource extends JsonResource
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
            "name" => ucfirst($this->name),
            "players" => PlayerResource::collection($this->players()->get()),
            /**
             *  alternative player collection resource returns a truncated array of player data
             * "players" => PlayerCollectionResource::collection($this->players()->get()),
             */

        ];
    }
}
