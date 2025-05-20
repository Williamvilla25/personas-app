<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'tb_municipio';
    protected $primaryKey = 'muni_codi';
    public $timestamps = false;

    protected $fillable = [
        'muni_nomb',
        'depa_codi',
    ];
}