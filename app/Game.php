<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        "players_side",
    ];

    public function teams()
    {
        // establishing the one to many relationship with the Team model
        return $this->hasMany(Team::class);
    }
}
