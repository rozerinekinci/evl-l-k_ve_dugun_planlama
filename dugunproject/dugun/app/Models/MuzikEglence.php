<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MuzikEglence extends Model
{
    protected $table = 'muzik_eglences';
    public $fillable = [
        'ad',
        'soyad',
        'telefon',
        'email',
        'adres',

    ];
    //
}
