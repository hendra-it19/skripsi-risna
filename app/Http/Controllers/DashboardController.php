<?php

namespace App\Http\Controllers;

use App\Models\HasilPerhitungan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        $judulHalaman = 'Utama';
        $user = User::count();
        $hasilPerhitunganPositif = HasilPerhitungan::whereHas('hasilDiagnosa', function ($q) {
            $q->where('kode', 'D1');
        })->count();
        $hasilPerhitunganNegatif = HasilPerhitungan::whereHas('hasilDiagnosa', function ($q) {
            $q->where('kode', 'D2');
        })->count();
        return view('pages.dashboardpage.utama', compact('judulHalaman', 'user', 'hasilPerhitunganNegatif', 'hasilPerhitunganPositif'));
    }
}
