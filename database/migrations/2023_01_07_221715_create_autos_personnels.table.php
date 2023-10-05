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
        Schema::create('autos_personnels', function (Blueprint $table) {
            $table->id();
            $table->integer('donnees_personnels_id');
            $table->string('Rvoiture');
            $table->string('titulaireCartegrise');
            $table->string('titulaire');
            $table->string('Conducteursecondaire');
            $table->date('date');
            $table->string('situationMatrimoniale');
            $table->string('profession');
            $table->string('typepermis');
            $table->string('suspendu_retire');
            $table->date('dateobtentionpermis');
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
        Schema::dropIfExists('autos_personnels');
    }
};
