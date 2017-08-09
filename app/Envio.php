<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
	#indicamos a que tabla apunta
    protected $table = 'envio';
    #los datos que podra recibir
    protected $fillable = ['contenido', 'observacion', 'fechaEnvio', 'fechaLlegada', 'estado', 'remitente_id', 'destinatario_id'];

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
