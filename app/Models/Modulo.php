<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $table = 'modulos';

    protected $fillable = ['nombre', 'icono', 'estado',
        'usuario_registra', 'fecha_registra', 'usuario_edita', 'fecha_edita', 'usuario_elimina', 'fecha_elimina'];
}
