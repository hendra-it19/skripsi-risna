<?php

namespace App\Http\Controllers;

use App\Models\JenisKelamin;
use App\Models\TinggiBadan;
use Illuminate\Http\Request;

class TinggiBadanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = 'Master - Tinggi Badan';
        $data = TinggiBadan::latest('id')->get();
        $no = 1;
        return view('pages.dashboardpage.master.tinggi_badan.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Master - Tinggi Badan';
        $jenisKelamin = JenisKelamin::latest('id')->get();
        return view('pages.dashboardpage.master.tinggi_badan.create', compact('judulHalaman', 'jenisKelamin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required', 'string', 'unique:tinggi_badan,kode'],
            'umur' => ['required', 'numeric', 'min:1'],
            'jenis_kelamin' => ['required', 'exists:jenis_kelamin,id'],
            'tinggi_badan' => ['required', 'numeric'],
        ]);
        TinggiBadan::create([
            'kode' => $request->kode,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan' => $request->tinggi_badan
        ]);
        return redirect()->route('tinggi-badan.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TinggiBadan $tinggiBadan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TinggiBadan $tinggiBadan)
    {
        $judulHalaman = 'Master - Tinggi Badan';
        $jenisKelamin = JenisKelamin::latest('id')->get();
        return view('pages.dashboardpage.master.tinggi_badan.update', compact('judulHalaman', 'tinggiBadan', 'jenisKelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TinggiBadan $tinggiBadan)
    {
        $request->validate([
            'kode' => ['required', $request->kode == $tinggiBadan->kode ? '' :  'unique:tinggi_badan,kode'],
            'umur' => ['required', 'numeric', 'min:1'],
            'jenis_kelamin' => ['required', 'exists:jenis_kelamin,id'],
            'tinggi_badan' => ['required', 'numeric', 'min:1']
        ]);
        $tinggiBadan->update([
            'kode' => $request->kode,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan' => $request->tinggi_badan
        ]);
        return redirect()->route('tinggi-badan.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TinggiBadan $tinggiBadan)
    {
        $tinggiBadan->delete();
        return redirect()->route('tinggi-badan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
