<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('temas')->insert(([
            'id'=>1,
            'temanev'=>'könnyű',
        ]));
        DB::table('temas')->insert(([
            'id'=>2,
            'temanev'=>'nehéz',
        ]));
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temaId');
            $table->string('angol');
            $table->string('magyar');
            $table->timestamps();

            $table->foreign('temaId')->references('id')->on('temas');
        });
        DB::table('szavaks')->insert(([
            'temaId'=>1,
            'angol'=>'beautiful',
            'magyar'=>'gyönyörű',

        ]));
        DB::table('szavaks')->insert(([
            'temaId'=>2,
            'angol'=>'smart',
            'magyar'=>'okos',
        ]));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
