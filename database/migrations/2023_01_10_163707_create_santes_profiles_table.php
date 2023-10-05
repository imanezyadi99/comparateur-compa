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
        Schema::create('santes_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('coordonnees_id');
            $table->string('profile');
            $table->date('datenaissance');  
            $table->string('situation_matrimoniale');
            $table->string('profession');
            $table->string('regimesocial');
            $table->string('codepostal');
            $table->string('recevoir_offrepartenaires');  
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
        Schema::dropIfExists('santes_profiles');
    }
};
