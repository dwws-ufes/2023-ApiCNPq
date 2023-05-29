<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicaos extends Model
{
    use HasFactory;
    //mudar pros campos certos
    protected $fillable = [
        'nome_instituicao',
        'endereco',
    ];
}