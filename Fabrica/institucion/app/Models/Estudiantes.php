<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    protected $filiable = [
       'Nom_estudiante',
       'Ape_estudiante',
       'Direccion',
       'Telefono',
       'Tipo_de_doc',
       'Num_documento',
       'created_at',
       'update_at' 
    ];
}
