<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Subarea extends Model{

    use HasFactory;
    protected $table = 'subarea';

    protected $fillable = [
        'nome_subarea',
        'area_id',
        'grande_area_id'
    ];

    protected $primaryKey = 'id';

    // public function areas(){
    //     return $this->belongsToMany(Area::class);
    // }
}
