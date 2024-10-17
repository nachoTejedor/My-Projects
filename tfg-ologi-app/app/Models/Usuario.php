<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Usuario extends User
{
    use HasFactory, Notifiable;
	protected $guarded=['id','esAdmin'];
	//protected $fillable=['nombre_usuario','nombre','apellidos','correo','experiencia'];
    public function setContrasenaAttribute($pwd){
        $this->attributes['contrasena']=bcrypt($pwd);
    }
    public function getAuthPassword()
    {
        return $this->attributes['contrasena'];
    }
    public function getAuthIdentifierName()
    {
        return 'nombre_usuario';
    }
    public function getAuthIdentifier()
    {
        return $this->nombre_usuario;
    }

}