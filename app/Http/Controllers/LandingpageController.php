<?php

namespace App\Http\Controllers;

use App\Models\HasilPerhitungan;
use App\Models\User;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function utama()
    {
        $judulHalaman = 'Utama';
        $jumlahPengguna = User::count();
        $jumlahDiagnosaPositif = HasilPerhitungan::whereHas('hasilDiagnosa', function ($query) {
            $query->where('kode', '=', 'D1');
        })->count();
        $jumlahDiagnosaNegatif = HasilPerhitungan::whereHas('hasilDiagnosa', function ($query) {
            $query->where('kode', '=', 'D2');
        })->count();
        return view('pages.landingpage.utama', compact('judulHalaman', 'jumlahPengguna', 'jumlahDiagnosaPositif', 'jumlahDiagnosaNegatif'));
    }
}
