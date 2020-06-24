<?php

namespace App\Http\Controllers\API;

use App\Player;
use App\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// using PlayerRequest to validate POST data
use App\Http\Requests\API\PlayerRequest;

// using PlayerResource to control GET data requests
use App\Http\Resources\API\PlayerResource;

class Players extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlayerResource::collection(Player::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->players as $player)
        {
            Player::create([
                "first_name" => $player['first_name'],
                "last_name" => $player['last_name'],
                "age" => $player['age'],
                "skill" => 3,
                "height" => $player['height'],
                "position" => $player['position'],
                "team_id" => $player['team_id'],
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
