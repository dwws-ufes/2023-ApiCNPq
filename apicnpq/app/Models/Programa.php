<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_programa',
        'grande_area_id',
    ];
    protected $table = 'programacnpq';
}
