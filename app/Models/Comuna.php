<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;
    protected $table = 'tb_comuna';
    protected $primarykey = 'comuna_codi';
    public $timetamps = false;
}

