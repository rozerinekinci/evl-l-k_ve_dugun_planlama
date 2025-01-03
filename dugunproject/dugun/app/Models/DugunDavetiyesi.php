<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunDavetiyesi extends Model
{
protected $table = 'dugun_davetiyesis';
public $fillable = [
    'ad',
    'soyad',
    'telefon',
    'email',
    'katilim_durumu',
    'dugun_id',
];
    //
}
