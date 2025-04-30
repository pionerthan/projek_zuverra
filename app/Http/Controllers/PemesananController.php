<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    // Menyimpan data dari form pemesanan dan arahkan ke halaman pembayaran
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email',
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin',
            'metode_pembayaran' => 'required|string'
        ]);

        // Menyimpan data ke database
        Pemesanan::create($request->all());

        // Arahkan ke halaman pembayaran setelah pemesanan berhasil disimpan
        return redirect()->route('pembayaran');
    }

    // Menampilkan semua pesanan di halaman pesanan.blade.php
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('pesanan', compact('pemesanans'));
    }

    // Menampilkan halaman pembayaran
    public function pembayaran()
    {
        $pemesanans = Pemesanan::all();
        return view('pembayaran', compact('pemesanans'));
    }
}
