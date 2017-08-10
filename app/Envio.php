<?php

namespace App;

use App\User;
use App\Envio;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
	#indicamos a que tabla apunta
    protected $table = 'envio';
    #constantes para el estado del envio
    const ENVIO_NO_FINALIZADO = 'En Proceso';
    const ENVIO_FINALIZADO = 'Finalizado';

    #los datos que podra recibir
    protected $fillable = ['contenido', 'observacion', 'fechaEnvio', 'fechaLlegada', 'estado', 'remitente_id', 'destinatario_id'];

    #funcion para ver estado del envio
    public function estaFinalizado(){
        return $this->estado == Envio::ENVIO_FINALIZADO;
    }

    #relacion con remitente
    public function remitente()
    {
        return $this->belongsTo(User::class);
    }

    #relacion con remitente
    public function destinatario()
    {
        return $this->belongsTo(User::class);
    }
}
