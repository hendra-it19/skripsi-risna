<?php

namespace App\Http\Controllers;

use App\Models\HasilPerhitungan;
use Illuminate\Http\Request;

class HasilPerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = 'Diagnosa - Input';
        return view('pages.dashboardpage.diagnosa.input.index', compact('judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HasilPerhitungan $hasilPerhitungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilPerhitungan $hasilPerhitungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilPerhitungan $hasilPerhitungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilPerhitungan $hasilPerhitungan)
    {
        //
    }

    public function riwayat(){
        $judulHalaman = 'Diagnosa - Riwayat Diagnosa';
        return view('pages.dashboardpage.diagnosa.riwayat.index', compact('judulHalaman'));
    }
}
