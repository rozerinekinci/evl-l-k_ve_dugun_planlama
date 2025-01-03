<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
    protected $table = 'musteris';
    public $fillable = ['id','ad','soyad','telefon','email','adres'];
    //
}
