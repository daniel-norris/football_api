<?php

namespace Tests\Unit;

use App\Player;

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
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
}
