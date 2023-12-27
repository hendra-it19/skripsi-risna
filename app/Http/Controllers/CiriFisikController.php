<?php

namespace App\Http\Controllers;

use App\Models\CiriFisik;
use Illuminate\Http\Request;

class CiriFisikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = "Master - Ciri Fisik";
        $data = CiriFisik::orderBy('created_at', 'ASC')->get();
        $no = 1;
        return view('pages.dashboardpage.master.ciri_fisik.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = "Master - Ciri Fisik";
        return view('pages.dashboardpage.master.ciri_fisik.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required', 'string', 'unique:ciri_fisik,kode', 'max:5'],
            'ciri_fisik' => ['required'],
        ]);
        CiriFisik::create([
            'kode' => $request->kode,
            'ciri_fisik' => $request->ciri_fisik,
        ]);
        return redirect()->route('ciri-fisik.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CiriFisik $ciriFisik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CiriFisik $ciriFisik)
    {
        $judulHalaman = 'Master - Ciri Fisik';
        return view('pages.dashboardpage.master.ciri_fisik.update', compact('judulHalaman', 'ciriFisik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CiriFisik $ciriFisik)
    {
        $request->validate([
            'kode' => ['required', $request->kode == $ciriFisik->kode ? '' : 'unique:ciri_fisik,kode', 'string', 'max:5'],
            'ciri_fisik' => ['required'],
        ]);
        $ciriFisik->update([
            'kode' => $request->kode,
            'ciri_fisik' => $request->ciri_fisik,
        ]);
        return redirect()->route('ciri-fisik.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CiriFisik $ciriFisik)
    {
        $ciriFisik->delete();
        return redirect()->route('ciri-fisik.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
