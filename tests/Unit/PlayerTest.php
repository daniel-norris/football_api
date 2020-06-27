<?php

namespace Tests\Unit;

use App\Player;
use App\Team;

// replaces the default PHPUnit tester
use Tests\TestCase;
// clears and migrates the database for each test to make database predictable
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlayerTest extends TestCase
{

    use RefreshDatabase;

    private $player;

    // setting up test variables
    public function setUp() : void
    {
        parent::setUp();

        $this->player = new Player([
            "first_name" => "bob",
            "last_name" => "smith",
        ]);
    }

    // testing fillable fields for players
    public function testFillable()
    {
        $this->assertSame("bob", $this->player->first_name);
        $this->assertSame("smith", $this->player->last_name);
    }

    // testing full name method for players
    public function testFullName()
    {
        $this->assertSame("Bob Smith", $this->player->fullName());
    }

    // test that data is entered and retrieved from db
    public function testDatabase()
    {
        Team::create([
            "name" => "Team 1",
            "side" => 1,
            "game_id" => 1
        ]);

        Player::create([
            "first_name" => "Bob",
            "last_name" => "Smith",
            "age" => 23,
            "height" => 185,
            "position" => "Forward",
            "team_id" => 1
        ]);

        $playerFromDB = Player::all()->first();
        $this->assertSame("Bob", $playerFromDB->first_name);

        $teamFromDB = Team::all()->first();
        $this->assertSame("Team 1", $teamFromDB->name);

    }
}
