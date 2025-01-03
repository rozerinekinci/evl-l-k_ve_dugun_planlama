<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DugunMenu extends Model
{
    protected $table = 'dugun_menus';
    public $fillable=[
        'ad',
        'miktar',
        'aciklama',
        'dügün_id'
    ];
    //
}
