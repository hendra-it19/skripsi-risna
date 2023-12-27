<?php

namespace App\Http\Controllers;

use App\Models\SolusiStunting;
use Illuminate\Http\Request;

class SolusiStuntingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $judulHalaman = 'Master - Solusi Stunting';
        $no = 1;
        $data = SolusiStunting::orderBy('created_at', 'ASC')->get();
        return view('pages.dashboardpage.master.solusi_stunting.index', compact('judulHalaman', 'no', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Master - Solusi Stunting';
        return view('pages.dashboardpage.master.solusi_stunting.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_saran' => ['required', 'in:pengobatan,pencegahan'],
            'umur_minimal' => ['required', 'numeric'],
            'umur_maksimal' => ['required', 'numeric'],
            'solusi_stunting' => ['required'],
        ]);
        SolusiStunting::create([
            'jenis_saran' => $request->jenis_saran,
            'umur_minimal' => $request->umur_minimal,
            'umur_maksimal' => $request->umur_maksimal,
            'solusi_stunting' => $request->solusi_stunting,
        ]);
        return redirect()->route('solusi-stunting.index')
            ->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SolusiStunting $solusiStunting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SolusiStunting $solusiStunting)
    {
        $judulHalaman = 'Master - Solusi Stunting';
        return view('pages.dashboardpage.master.solusi_stunting.update', compact('judulHalaman', 'solusiStunting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SolusiStunting $solusiStunting)
    {
        $request->validate([
            'jenis_saran' => ['required', 'in:pengobatan,pencegahan'],
            'umur_minimal' => ['required', 'numeric'],
            'umur_maksimal' => ['required', 'numeric'],
            'solusi_stunting' => ['required'],
        ]);
        $solusiStunting->update([
            'jenis_saran' => $request->jenis_saran,
            'umur_minimal' => $request->umur_minimal,
            'umur_maksimal' => $request->umur_maksimal,
            'solusi_stunting' => $request->solusi_stunting,
        ]);
        return redirect()->route('solusi-stunting.index')
            ->with('success', 'Data baru berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SolusiStunting $solusiStunting)
    {
        $solusiStunting->delete();
        return redirect()->route('solusi-stunting.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
