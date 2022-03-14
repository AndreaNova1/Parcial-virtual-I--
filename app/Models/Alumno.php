<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $table='alumnos';

    public $timestamps=false;
    protected $fillable=[
        'carne','nombre','alias','foto', 'correo','fecha_nacimiento', 'telefono'
    ];

    protected $primaryKey='carne';



}
