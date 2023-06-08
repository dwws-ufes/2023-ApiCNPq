<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolsas extends Model
{
    use HasFactory;
    //mudar pros campos certos
    protected $fillable = [
        'protocolo',
        'programacnpq',
        'datainicio',
        'datafim',
        'valorbolsa',
        'endereco_id'
    ];
    protected $table = 'bolsas';
}