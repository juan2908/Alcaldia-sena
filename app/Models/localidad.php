<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localidad extends Model
{
    use HasFactory;

    protected $table='localidads';
    protected $primaryKey='id';
    protected $fillable=[
        'localidad'
    ];

}
