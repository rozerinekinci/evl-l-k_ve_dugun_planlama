<?php

namespace App\Http\Controllers;

use App\Models\iletisim;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function showForm()
    {
        return view('iletisim');
    }

    // İletişim formu verilerini kaydet
    public function store(Request $request)
    {
        // Form verilerini doğrula
        $validated = $request->validate([
            'ad' => 'required|max:255',
            'soyad' => 'required|max:255',
            'telefon' => 'nullable|max:15',
            'email' => 'required|email|max:255',
            'mesaj' => 'required',
        ]);

        // Verileri kaydet
        Iletisim::create($validated);

        // Kullanıcıya başarı mesajı göster
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
