<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_beneficiario',
        'programacnpq_id',
        'endereco_id',
        'instituicao_id',
        'bolsa_id'
    ];
    protected $table = 'beneficiario';
    
    public function bolsas(){
        return $this->belongsTo(Bolsas::class, 'bolsa_id');
    }


}