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
        "height",
        "position",
    ];

    public function team()
    {
        // establishing the one to many relationship with the Team model
        return $this->belongsTo(Team::class);
    }
}
