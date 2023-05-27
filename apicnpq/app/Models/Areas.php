<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_area',
        'grandearea_id',
    ];
    // protected $primaryKey = 'id';
    protected $table = 'area';

    //indicando as ligações com as classes que queremos trabalhar
    // public function grandearea(){
    //     return $this->belongsTo(Grandearea::class);
    // }

    // public function subareas(){
    //     return $this->hasMany(Subarea::class);
    // }


}
