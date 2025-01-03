<?php

use App\Http\Controllers\DugunController;
use App\Http\Controllers\IletisimController;
use Illuminate\Support\Facades\Route;



Route::get('/',function(){
    return view('anasayfa');
});
Route::get('/dugunler', [DugunController::class, 'index'])->name('dugunler');

Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});
Route::get('/iletisim', [IletisimController::class, 'show'])->name('iletisim');


Route::get('/iletisim', [IletisimController::class, 'showForm'])->name('iletisim.show');
Route::post('/iletisim', [IletisimController::class, 'store'])->name('iletisim.store');



Route::get('/hizmetler', function () {
    return view('hizmetler');
});

Route::get('/fotografcilik', function () {
    return view('fotografcilik');
});

Route::get('/gelinlik-damatlik', function () {
    return view('gelinlik-damatlik');
});

Route::get('/davetiyeler', function () {
    return view('davetiyeler');
});

Route::get('/iletisim', function () {
    return view('iletisim');

});
