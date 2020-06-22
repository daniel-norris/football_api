<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // included fillable fields to overcome mass assignment
    protected $fillable = ["name"];

    public function players()
    {
        // establishing the one to many relationship with the Player model
        return $this->hasMany(Player::class);
    }
}
