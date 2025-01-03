<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalisanDugunIliski extends Model
{
    protected $table = 'calisan_dugun_liski';
    public $fillable=[
        'dügün_id',
        'calisan_id',
    ];
    //
}
