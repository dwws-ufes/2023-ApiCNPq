<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    use HasFactory;
    //mudar pros campos certos
    protected $fillable = [
        'sigla',
    ];
}