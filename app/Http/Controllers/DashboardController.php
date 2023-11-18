<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard(){
        $judulHalaman = 'Utama';
        return view('pages.dashboardpage.utama', compact('judulHalaman'));
    }
}
