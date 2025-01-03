<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class iletisim extends Model
{

    protected $table = 'iletisim'; // Eğer tablonuzun adı farklıysa burada belirtin

    // Doldurulabilir alanlar
    protected $fillable = [
        'ad',
        'email',
        'mesaj',];
}
