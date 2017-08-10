<?php

namespace App;

use App\Area;
use App\Envio;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    #indicamos a que tabla apunta
    protected $table = 'users';

    #constantes con las que manipularemos estado y admin
    const USUARIO_ADMINISTRADOR = '1';
    const USUARIO_NO_ADMINISTRADOR = '0';
    const USUARIO_ACTIVO = '1';
    const USUARIO_INACTIVO = '0';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'username', 'descripcion','email', 'password', 'avatar', 'estado', 'admin', 'area_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    #metodo para ver si es administrador
    public function esAdministrador(){
        return $this->admin == User::USUARIO_ADMINISTRADOR;
    }

    #metodo para ver si usuario esta activo
    public function estaActivo(){
        return $this->estado == User::USUARIO_ACTIVO;
    }

    #relacion con area
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    #relacion con envio
    public function envios()
    {
        return $this->hasMany(Envio::class);
    }

    #relacion con caso
    public function casos(){
        return $this->hasMany(Caso::class);
    }
}
