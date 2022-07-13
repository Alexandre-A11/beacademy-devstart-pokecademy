<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('image')->nullable();
            $table->integer('power');
            $table->integer('attack');
            $table->integer('damage');
            $table->integer('defense');
            $table->integer('healthy');
            $table->integer('stars');
            $table->integer('pokedex_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
};