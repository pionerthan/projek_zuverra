<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth', 'verified'])->name('beranda');

Route::get('/keranjang', function () {
    return view('keranjang');
})->middleware(['auth', 'verified'])->name('keranjang');

Route::get('/pencarian', function () {
    return view('pencarian');
})->middleware(['auth', 'verified'])->name('pencarian');

Route::post('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::post('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/infokamar1', function () {
    return view('infokamar1');
})->name('infokamar1');

Route::get('/infokamar2', function () {
    return view('infokamar2');
})->name('infokamar2');

Route::get('/infokamar3', function () {
    return view('infokamar3');
})->name('infokamar3');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/kamarPesanan', function () {
    return view('kamarPesanan');
})->name('kamarPesanan');

Route::get('/kamar-pesanan', function () {
    return view('kamarPesanan');
})->name('kamar.pesanan');

Route::get('/pesanan/kosong', function () {
    return view('pesanan_kosong'); 
})->name('pesanan.kosong');


Route::get('/pesanan-kosong', [PesananController::class, 'kosong'])->name('pesanan.kosong');





// ada route pemesanan
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pemesanan', function () {
        return view('pemesanan');
    })->name('pemesanan');
});

//  Buat dua post sekaligus dari pesanan dan keranjang
Route::post('/proses-booking', function (Request $request) {
    $data = [
        'room_number'   => $request->room_number,
        'checkin_date'  => $request->checkin_date,
        'checkout_date' => $request->checkout_date,
    ];

    if ($request->action === 'pesan') {
        return redirect()->route('pemesanan')->with('data', $data);
    } elseif ($request->action === 'keranjang') {
        return redirect()->route('keranjang')->with('data', $data);
    }

    return redirect()->route('beranda');
})->middleware(['auth', 'verified'])->name('proses.booking');

require __DIR__.'/auth.php';
