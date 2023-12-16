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
        $data = HasilDiagnosa::latest('id')->get();
        $no = 1;
        return view('pages.dashboardpage.master.hasil_diagnosa.index', compact('judulHalaman', 'no', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Master - Hasil Diagnosa';
        return view('pages.dashboardpage.master.hasil_diagnosa.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required', 'unique:hasil_diagnosa,kode','string','max:5'],
            'hasil_diagnosa' => ['required', 'unique:hasil_diagnosa,hasil_diagnosa'],
        ]);
        HasilDiagnosa::create([
            'kode' => $request->kode,
            'hasil_diagnosa' => $request->hasil_diagnosa
        ]);
        return redirect()->route('hasil-diagnosa.index')
            ->with('success', 'Data berhasil ditambahkan!');
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
        $judulHalaman = 'Master - Hasil Diagnosa';
        return view('pages.dashboardpage.master.hasil_diagnosa.update', compact('judulHalaman', 'hasilDiagnosa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilDiagnosa $hasilDiagnosa)
    {
        $request->validate([
            'kode' => [$request->kode == $hasilDiagnosa->kode ? '' : 'unique:hasil_diagnosa,kode', 'required','string','max:5'],
            'hasil_diagnosa' => [$request->hasil_diagnosa == $hasilDiagnosa->hasil_diagnosa ? '' : 'unique:hasil_diagnosa,hasil_diagnosa', 'required'],
        ]);
        $hasilDiagnosa->update([
            'kode' => $request->kode,
            'hasil_diagnosa' => $request->hasil_diagnosa
        ]);
        return redirect()->route('hasil-diagnosa.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilDiagnosa $hasilDiagnosa)
    {
        $hasilDiagnosa->delete();
        return redirect()->route('hasil-diagnosa.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
