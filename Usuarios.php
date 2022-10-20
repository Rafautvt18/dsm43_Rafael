<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'tb_usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'clave',
        'nombre',
        'apellido_p',
        'apellido_m',
        'fecha_nacimiento',
        'genero',
        'foto',
        'email',
        'pass',
        'nivel',
        'activo'
    ];    
}
