<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        "kode_pemesanan",
        "tgl_pembayaran",
        "total_pembayaran",
        "status_pembayaran"
    ];
}
