<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->string('nom_enterprise');
            $table->string('sigle_enterprise')->nullable(); 
            $table->string('ninea_enterprise')->nullable(); 
            $table->string('nrc_enterprise')->nullable(); 
            $table->string('activitecommercial_enterprise')->nullable(); 
            $table->string('ca_enterprise')->nullable(); 
            $table->string('logo_enterprise')->nullable(); 
            $table->string('theme_enterprise')->nullable();  
            $table->string('flag_enterprise');   
 
            $table->unique([DB::raw('nom_enterprise(255)')]); 
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
        Schema::dropIfExists('enterprises');
    }
}
