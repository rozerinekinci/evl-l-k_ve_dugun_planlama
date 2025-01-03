<?php

namespace App\Http\Controllers;

use App\Models\Dugun;
use Illuminate\Http\Request;

class DugunController extends Controller
{
    public function index()
    {
        // Veritabanından tüm düğünleri alıyoruz
        $dugunler = Dugun::all();

        // Görünümü döndür ve veriyi paylaş
        return view('dugunler', compact('dugunler'));
    }

    public function store(Request $request)
    {
        // Yeni düğün ekliyoruz
        Dugun::create([
            'dugun_ismi' => $request->dugun_ismi,
            'dugun_tarihi' => $request->dugun_tarihi,
        ]);

        return redirect()->route('dugunler'); // Düğünler sayfasına yönlendiriyoruz
    }



}
