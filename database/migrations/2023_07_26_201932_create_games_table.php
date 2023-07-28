<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teamA_id');
            $table->unsignedBigInteger('teamB_id');
            $table->timestamps();
            $table->string('status');
            $table->integer('pointsA')->nullable();
            $table->integer('pointsB')->nullable();


            $table->foreign('teamA_id')->references('id')->on('teams');
            $table->foreign('teamB_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
}
