<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulario extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('registro', function($table)
      {        
        $table->increments('id');
        $table->bigInteger('cedula'); 
        $table->text('primer_nombre');      
        $table->text('area');
        $table->text('cargo');
        $table->integer('fecha');
        $table->integer('hora');
        $table->timestamps();
      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('registro');
        //
    }
}
