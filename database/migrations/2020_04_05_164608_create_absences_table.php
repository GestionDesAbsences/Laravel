<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_etud')->unsigned();
            $table->bigInteger('id_seance')->unsigned();
            $table->boolean('retard');
            $table->boolean('absences');
            $table->foreign('id_etud')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('id_seance')->references('id_seance')->on('seances')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
