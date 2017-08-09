<?php

namespace App;

use App\Archivo;
use App\Redactor;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{	
	#indicamos a que tabla aputna
    protected $table = 'caso';
    #los datos que podra recibir
    protected $fillable = ['titulo', 'contenido', 'conclusion', 'fecha', 'redactor_id'];

    #relacion con readactor(usuario)
    public function redactor(){
    	return $this->belongsTo(User::class);
    }

    #relacion con archivo
    public function archivos(){
    	return $this->hasMany(Archivo::class);
    }
}
