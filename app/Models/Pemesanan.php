<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'tanggal_checkin',
        'tanggal_checkout',
        'metode_pembayaran',
    ];

    protected $dates = [
        'tanggal_checkin',
        'tanggal_checkout',
    ];
}
