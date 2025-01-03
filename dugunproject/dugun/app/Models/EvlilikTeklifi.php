<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvlilikTeklifi extends Model
{
    protected $table = 'evlilik_teklifis';
    public $fillable =[
        'ad',
        'miktar',
        'acıklama',
        'dügün_id',

    ];
    //
}
