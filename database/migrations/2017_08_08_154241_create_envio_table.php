<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->text('observacion')->nullable();
            $table->date('fechaEnvio');
            $table->date('fechaLlegada');
            $table->string('estado');
            #foreign key
            $table->integer('remitente_id')->unsigned();
            $table->foreign('remitente_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('destinatario_id')->unsigned();
            $table->foreign('destinatario_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('envio');
    }
}