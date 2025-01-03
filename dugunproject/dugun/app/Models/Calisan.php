<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calisan extends Model
{
    protected $table = 'calisans';
    public $fillable =[
        'ad',
        'soyad',
        'telefon',
        'email',
        'pozisyon',
        'maas',
    ];
    //
}
