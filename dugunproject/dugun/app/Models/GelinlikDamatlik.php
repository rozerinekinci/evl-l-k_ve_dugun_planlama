<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GelinlikDamatlik extends Model
{
    protected $table = 'gelinlik_damatliks';
    public $fillable = ['id', 'user_id', 'gelinlik_id', 'damatlik_id'];
    //
}
