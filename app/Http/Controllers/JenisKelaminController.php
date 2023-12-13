<?php

namespace App\Http\Controllers;

use App\Models\JenisKelamin;
use Illuminate\Http\Request;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = "Master - Jenis Kelamin";
        $data =  JenisKelamin::latest('id')->get();
        $no = 1;
        return view('pages.dashboardpage.master.jenis_kelamin.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = "Master - Jenis Kelamin";
        return view('pages.dashboardpage.master.jenis_kelamin.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required', 'unique:jenis_kelamins,kode'],
            'jenis_kelamin' => ['required', 'in:laki-laki,perempuan', 'unique:jenis_kelamins,jenis_kelamin'],
        ]);
        JenisKelamin::create([
            'kode' => $request->kode,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect()->route('jenis-kelamin.index')
            ->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisKelamin $jenisKelamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKelamin $jenisKelamin)
    {
        $judulHalaman = 'Mester - Jenis Kelamin';
        return view('pages.dashboardpage.master.jenis_kelamin.update', compact('judulHalaman', 'jenisKelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisKelamin $jenisKelamin)
    {
        $request->validate([
            'kode' => ['required', $request->kode == $jenisKelamin->kode ? '' : 'unique:jenis_kelamins,kode'],
            'jenis_kelamin' => ['required', $request->jenisKelamin == $jenisKelamin->jenis_kelamin ? '' : 'unique:jenis_kelamins,jenis_kelamin'],
        ]);
        $jenisKelamin->update([
            'kode' => $request->kode,
            'jenis_kelamins' => $request->jenisKelamin
        ]);
        return redirect()->route('jenis-kelamin.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisKelamin $jenisKelamin)
    {
        $jenisKelamin->delete();
        $
        return redirect()->route('jenis-kelamin.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
