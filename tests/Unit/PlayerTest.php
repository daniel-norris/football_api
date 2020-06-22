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

    public function setUp() : void
    {
        parent::setUp();

        $this->player = new Player([
            "first_name" => "Bob",
            "last_name" => "Smith",
        ]);
    }

    public function testFillable()
    {
        $this->assertSame("Bob", $this->player->first_name);
        $this->assertSame("Smith", $this->player->last_name);
    }

    public function testFullName()
    {
        $this->assertSame("Bob Smith", $this->player->fullName());
    }

    public function testDatabase()
    {
        Team::create([
            "name" => "Team 1"
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

    }
}
