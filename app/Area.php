<?php

namespace App;

use App\User;
use App\Documento;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	#indicamos a que tabla apunta
    protected $table = 'area';
    #los datos que podra recibir
    protected $fillable = ['nombre', 'codigo', 'descripcion', 'estado'];

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
