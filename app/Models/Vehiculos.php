<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla si no sigue la convención de Laravel
    protected $table = 'vehiculos';

    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = [
        'placa',
        'modelo',
        'propietario',
    ];
}