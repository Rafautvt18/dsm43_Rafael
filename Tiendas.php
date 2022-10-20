<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    use HasFactory;

    protected $table = 'tb_tienda';
    protected $primaryKey = 'id_tienda';
    protected $fillable = [
        'id_tienda',
        'clave',
        'nombre',
    ];
}
