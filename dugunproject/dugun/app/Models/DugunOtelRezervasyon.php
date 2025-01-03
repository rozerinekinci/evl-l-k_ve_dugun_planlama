<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunOtelRezervasyon extends Model
{
    protected $table = 'dugun_otel_rezervasyons';
    public $fillable =[
        'ad',
        'miktar',
        'açıklama',
        'dügün_id',
    ];
    //
}
