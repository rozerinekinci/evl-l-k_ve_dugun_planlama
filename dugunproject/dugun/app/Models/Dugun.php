<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dugun extends Model
{
    use HasFactory;
    protected $table = 'duguns';
    public $fillable = [
        'dugun_ismi',
        'dugun_tarihi',
        'mekan',
        'muzik_eglence_id',
        'musteri_id',


    ];
    //
}
