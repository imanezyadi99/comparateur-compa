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
        Schema::create('autos_vehicules', function (Blueprint $table) {
            $table->id();
            $table->integer('donnees_personnels_id');
            $table->string('immatriculation');
            $table->date('dateachatvehicule');
            $table->date('datepremiercirculation');
            $table->string('kelometre');
            $table->string('modefinancement');
            $table->string('typelogement');
            $table->string('nom');
            $table->string('temp');
            $table->string('usagevehicule');
            $table->string('typeparking');
            $table->string('ville');

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
        Schema::dropIfExists('autos_vehicules');
    }
};
