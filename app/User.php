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
