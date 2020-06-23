<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            //

            $table->biginteger('personne_id')->unsigned();  
            $table->foreign('personne_id')->references('id')->on('personnes');   

            $table->biginteger('status_id')->unsigned(); 
            $table->foreign('status_id')->references('id')->on('activity_statuses'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            //
        });
    }
}
