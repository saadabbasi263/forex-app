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
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->integer('mov_id');
            $table->string('mov_title')->nullable();
            $table->integer('year')->nullable();
            $table->integer('mov_time')->nullable();
            $table->string('mov_lang')->nullable();
            $table->date('movie_dt_rel')->nullable();
            $table->string('movie_rel_country')->nullable();
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
        Schema::dropIfExists('movie');
    }
};
