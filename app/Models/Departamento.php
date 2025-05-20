<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'tb_departamento';
    protected $primaryKey = 'depa_codi';
    public $timestamps = false;

    protected $fillable = [
        'depa_nomb',
        'pais_codi',
    ];
}