<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    // included fillable fields to overcome mass assignment
    protected $fillable = [
        "first_name",
        "last_name",
        "age",
        "skill",
        "position",
        "team_id",
    ];

    public function team()
    {
        // establishing the one to many relationship with the Team model
        return $this->belongsTo(Team::class);
    }

    // creating a full name method to return the first and last name fields concatenated
    public function fullName()
    {
        return ucfirst($this->first_name) . " " . ucfirst($this->last_name);
    }
}
