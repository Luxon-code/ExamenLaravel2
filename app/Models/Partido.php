<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = ['goles_teamcasa','goles_teamVisitante'
    ,'penaltis_teamcasa','penaltis_teamVisitante','team_casa_id','team_visitante_id'
    ];
    use HasFactory;
}
