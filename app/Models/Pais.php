<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'tb_pais';
    protected $primaryKey = 'pais_codi';
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'pais_codi',
        'pais_nomb',
    ];
}