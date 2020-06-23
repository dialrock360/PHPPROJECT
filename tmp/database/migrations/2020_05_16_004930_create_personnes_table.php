<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_personne');
            $table->string('prenom_personne')->nullable();
            $table->string('genre_personne');
            $table->date('date_naiss_personne')->nullable();
            $table->string('lieu_naiss_personne')->nullable();
            $table->string('nationalite_personne')->nullable();
            $table->string('flag_personne'); 
            $table->biginteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');   

            $table->timestamps(); 
        });
    }

//`id`, ``, ``, ``, ``, 
//``, ``, `typepiece_personne`, `numpiece_personne`,
// `photo_personne`, `details_personne`, `id_service`, ``
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes');
    }
}
