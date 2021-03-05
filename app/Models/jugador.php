<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;

    protected $table='jugadors';
    protected $primaryKey='id';
    protected $fillable=[
        'nombres','apellidos','numero_camisa','apodo','equipo_id'
    ];

}
