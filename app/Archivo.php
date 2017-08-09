<?php

namespace App;

use App\Caso;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{	
	#indicamos a que tabla va a apuntar
    protected $table = 'archivo';
    #los datos que podra recibir
    protected $fillable = ['nombre', 'formato', 'caso_id'];

    #relacion con caso
    public function caso(){
    	return $this->belongsTo(Caso::class);
    }
}
