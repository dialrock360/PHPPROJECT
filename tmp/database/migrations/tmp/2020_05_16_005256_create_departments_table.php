<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_department');
            $table->text('info_department')->nullable(); 
            $table->string('flag_department');   


            $table->biginteger('enterprise_id')->unsigned(); 
            $table->foreign('enterprise_id')->references('id')->on('enterprises');   
            $table->unique([DB::raw('nom_department(255)')]);
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
        Schema::dropIfExists('departments');
    }
}
