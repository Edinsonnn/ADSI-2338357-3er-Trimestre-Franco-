<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalizacion extends Model
{
    use HasFactory;
    protected $filiable = [
        'Avances',
        'Fecha_avance',
        'Precio',
        'created_at',
        'update_at'
    ];
}
