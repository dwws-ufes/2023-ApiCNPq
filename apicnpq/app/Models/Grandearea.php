<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandearea extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_grandearea'
    ];
    protected $table = 'grandearea';
    protected $primaryKey = 'id';

    // public function areas(){
    //     return $this->hasMany(Areas::class);
    // }

}
