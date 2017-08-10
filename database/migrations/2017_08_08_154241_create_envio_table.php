<?php

use App\Envio;
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
            $table->date('fechaLlegada')->nullable();
            $table->string('estado')->default(Envio::ENVIO_NO_FINALIZADO);
            #foreign key
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
