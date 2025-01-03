<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunHarcama extends Model
{
    protected $table = 'dugun_harcamas';
    public $fillable =[
        'ad',
        'miktar',
        'aciklama',
        'dügün_id'
    ];
    //
}
