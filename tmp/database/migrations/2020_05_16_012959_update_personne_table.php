<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnes', function (Blueprint $table) {
            //

            $table->biginteger('source_id')->unsigned();  
            $table->foreign('source_id')->references('id')->on('personne_sources');   

            $table->biginteger('account_id')->unsigned(); 
            $table->foreign('account_id')->references('id')->on('accounts');   

            $table->biginteger('status_id')->unsigned(); 
            $table->foreign('status_id')->references('id')->on('personne_statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personnes', function (Blueprint $table) {
            //
        });
    }
}
