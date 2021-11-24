<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('libro', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('categoria_id')->unsigned();//campo relacional

            $table->string('nombre');

            $table->timestamps();
            
            //la comumna categoria_id pertence a una relacion con el campo id de la tabla categoria(va hacer borrado en cascada)
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
