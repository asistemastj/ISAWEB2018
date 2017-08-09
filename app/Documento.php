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

    #relacion con area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
