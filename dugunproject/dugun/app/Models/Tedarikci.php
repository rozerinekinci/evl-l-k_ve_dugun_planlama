<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tedarikci extends Model
{
    protected $table = 'tedarikcis';
    public $fillable =[
        'ad',
        'soyad',
        'telefon',
        'email',
        'adres',
    ];
    //
}
