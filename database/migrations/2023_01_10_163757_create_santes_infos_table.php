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
        Schema::create('santes_infos', function (Blueprint $table) {
            $table->id();
            $table->string('coordonnees_id');
            $table->string('nameassurer');
            $table->string('assurance_complementaire');  
            $table->string('assureuractuel');
            $table->string('moisecheance');
            $table->string('niveau_protection');
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
        Schema::dropIfExists('santes_infos');
    }
};
