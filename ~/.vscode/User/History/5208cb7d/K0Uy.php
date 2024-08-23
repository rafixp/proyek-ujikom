<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use App\Models\statusPemesanan;

use Illuminate\Http\Request;
use Illuminate\Suppport\Facades\Hash;

class layananController extends Controller
{
    public function homeView(){
        return view('admin.home');
    }

    public function transaksiView(){
        return view('admin.transaksi');
    }

    public function memberView(){
        return view('admin.member');
    }
}
