<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    use HasFactory;

    protected $table = 'tb_tipo';
    protected $primaryKey = 'id_tipo';
    protected $fillable = [
        'id_tipo',
        'clave',
        'nombre',
        'detalle',
        'activo',
    ];
}
