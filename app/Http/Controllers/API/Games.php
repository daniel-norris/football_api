<?php

namespace App\Http\Controllers\API;

use App\Game;
use App\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\GameRequest;
use App\Http\Resources\API\GameResource;

use Illuminate\Http\Request;

class Games extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GameResource::collection(Game::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        $gameData = $request->all();
        $newGame = Game::create($gameData);

        $newGame->teams()->createMany([
            [
                "name" => "asdfasdf",
                "side" => 1,
                "game_id" => $game->id,
            ],
            [
                "name" => "cvbxcbv",
                "side" => 2,
                "game_id" => $game->id,
            ],
        ]);
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
