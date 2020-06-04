<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('raison');
            $table->boolean('approuve');
            $table->unsignedBigInteger('id_prof');

            $table->foreign('id_prof')->references('id')->on('profs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
