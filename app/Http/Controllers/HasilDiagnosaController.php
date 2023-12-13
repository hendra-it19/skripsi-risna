<?php

namespace App\Http\Controllers;

use App\Models\HasilDiagnosa;
use Illuminate\Http\Request;

class HasilDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = 'Master - Hasil Diagnosa';
        return view('pages.dashboardpage.master.hasil_diagnosa.index',compact('judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(HasilDiagnosa $hasilDiagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilDiagnosa $hasilDiagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilDiagnosa $hasilDiagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilDiagnosa $hasilDiagnosa)
    {
        //
    }
}
