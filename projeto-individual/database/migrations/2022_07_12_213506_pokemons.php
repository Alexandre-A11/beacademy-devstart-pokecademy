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
            $table->string('description');
            $table->string('power');
            $table->string('damage');
            $table->string('attack');
            $table->string('healthy');
            $table->string('pokedex_id');
            $table->integer('stars');
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
