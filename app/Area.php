<?php

namespace App;

use App\Area;
use App\User;
use App\Documento;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	#indicamos a que tabla apunta
    protected $table = 'area';
    #constantes con las cuales determinaremos el estado
    const AREA_ACTIVA = '1';
    const AREA_INACTIVA = '0';

    #los datos que podra recibir
    protected $fillable = ['nombre', 'codigo', 'descripcion', 'estado'];

    public function estaActiva(){
        return $this->estado == Area::AREA_ACTIVA;
    }

    #relacion con usuario
    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    #relacion con documento
    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }
}
