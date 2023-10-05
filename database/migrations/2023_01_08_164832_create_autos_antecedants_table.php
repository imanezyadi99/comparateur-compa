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
        Schema::create('autos_antecedants', function (Blueprint $table) {
            $table->id();
            $table->integer('donnees_personnels_id');
            $table->string('assure');
            $table->string('assureinterruption');  
            $table->string('bonus');
            $table->string('conducteurprincipal');
            $table->string('nombresinistre');
            $table->string('niveaugarantie');
            $table->string('assurervehiculeEn');     
            $table->string('datenouveaucontrat');    
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
        Schema::dropIfExists('autos_antecedants');
    }
};
