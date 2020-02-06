<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsertestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('usia');
            $table->string('email');
            $table->string('j_kel');
            $table->integer('dm');
            $table->integer('im');
            $table->integer('sm');
            $table->integer('cm');
            $table->integer('bm');
            $table->integer('dl');
            $table->integer('il');
            $table->integer('sl');
            $table->integer('cl');
            $table->integer('bl');
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
        Schema::dropIfExists('usertest');
    }
}
