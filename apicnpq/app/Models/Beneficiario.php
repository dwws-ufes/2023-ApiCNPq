<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    //mudar pros campos certos
    protected $fillable = [
        'nome_beneficiario',
        'programacnpq_id',
        'endereco_id',
        'instituicao_id',
    ];
}