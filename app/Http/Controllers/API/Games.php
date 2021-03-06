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
    public function store(GameRequest $request, Game $game)
    {
        $gameData = $request->all();
        $newGame = Game::create($gameData);

        // create a game model and two associated teams at the same time
        $newGame->teams()->createMany([
            [
                "name" => $request->team_1,
                "side" => 1,
                "game_id" => $game->id,
            ],
            [
                "name" => $request->team_2,
                "side" => 2,
                "game_id" => $game->id,
            ],
        ]);

        return new GameResource($newGame);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return new GameResource($game);
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
