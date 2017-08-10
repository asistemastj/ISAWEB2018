<?php

namespace App;

use App\Area;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	#indicamos la tabla que apunta
    protected $table = 'documento';
    #los datos que podra recibir
    protected $fillable = ['nombre', 'descripcion', 'estado', 'tipo', 'archivo', 'area_id'];
    #constantes con las cuales manipularemos el estado
    const DOC_DISPONIBLE = '1';
    const DOC_NO_DISPLONIBLE = '0';

    #metodo con el cual veremos si un documento esta disponible
    public function estaDisponible(){
    	return $this->estado == Documento::DOC_DISPONIBLE;
    }
    #relacion con area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
