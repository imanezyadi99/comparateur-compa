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
        Schema::create('santes_coordonnees', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('name');  
            $table->string('prenom');
            $table->string('ville');
            $table->string('codepostale');
            $table->string('email');
            $table->string('telephone');  
            $table->softDeletes();
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
        Schema::dropIfExists('santes_coordonnees');
    }
};
