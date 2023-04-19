<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_playoffs', function (Blueprint $table) {
            $table->id();

//            $table->unsignedBigInteger('oponent_id');
//            $table->foreignId('oponent_id')->references('game_playoff_id')
//                ->on('oponents')->onDelete('cascade');

            $table->string('team_name');
            $table->date('data');
            $table->text('video');
            $table->string('foto');
            $table->string('stat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_playoffs');
    }
};