<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mekan extends Model
{
    protected $table = 'mekans';
    public $fillable = ['id', 'mekan_ismi','mekan_konum'];
    //
}
