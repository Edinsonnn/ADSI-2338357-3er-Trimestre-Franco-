<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;
    protected $filiable = [
        'Nombre_recurso',
        'Tipo',
        'created_at',
        'update_at'
    ];
}
