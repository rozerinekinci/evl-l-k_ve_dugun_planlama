<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Davetli extends Model
{
    protected $table = 'davetlis';
    public $fillable = [
    'ad',
    'soyad',
    'telefon',
    'email',
    'katilim_durumu',
    'dügün_id',
        ];

    //
}
