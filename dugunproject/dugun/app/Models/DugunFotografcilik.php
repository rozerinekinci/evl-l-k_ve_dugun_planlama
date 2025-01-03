<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunFotografcilik extends Model
{
    protected $table = 'dugun_fotografciliks';
    public $fillable=[
        'ad',
        'soyad',
        'telefon',
        'email',
        'dugun_id',
    ];
    //
}
