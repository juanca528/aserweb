<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prorroga extends Model
{
    protected $fillable = ['id','cantidad_dia_prorroga','fechainicio','incapacidad','%incapacidad','seguimiento_incapacidad',
    ];
}

