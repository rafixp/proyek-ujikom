<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "kode_pemesanan",
        "nama_pengguna",
        "jk",
        "tgl_pemesanan",
        "jenis_cucian",
        "qty",
    ];
}
