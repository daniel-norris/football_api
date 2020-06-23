<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("first_name", 100);
            $table->string("last_name", 100);
            $table->integer("age");
            $table->integer("height");
            $table->enum('skill', [1, 2, 3, 4, 5]);
            $table->string("position", 30);
            // creating a one-to-many relationship with the teams db table
            $table->foreignId("team_id")->unsigned();
            $table->foreign("team_id")->references("id")->on("teams")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
