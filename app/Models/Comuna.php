<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{

    protected $table = 'tb_comuna';
    protected $primaryKey = 'comu_codi'; // Definir la clave primaria correcta
    public $incrementing = false; // Si la clave no es autoincremental
    
}

