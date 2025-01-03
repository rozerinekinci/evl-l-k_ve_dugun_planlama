<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunIhtiyacListesi extends Model
{
    protected $table = 'dugun_ihtiyac_listesis';
    public $fillable =[
        'ad',
        'miktar',
        'aciklama',
        'dügün_id',
    ];
    //
}
