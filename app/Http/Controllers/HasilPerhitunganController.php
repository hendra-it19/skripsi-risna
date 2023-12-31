<?php

namespace App\Http\Controllers;

use App\Models\CiriFisik;
use App\Models\HasilDiagnosa;
use App\Models\HasilPerhitungan;
use App\Models\JenisKelamin;
use App\Models\SolusiStunting;
use App\Models\TinggiBadan;
use Illuminate\Http\Request;

class HasilPerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = "Diagnosa - Riwayat";
        if (auth()->user()->role == 'admin') {
            $data = HasilPerhitungan::all();
        } else {
            $data = HasilPerhitungan::where('user', auth()->user()->id)->get();
        }

        $no = 1;
        return view('pages.dashboardpage.diagnosa.riwayat', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = 'Diagnosa - Input';
        $jenisKelamin = JenisKelamin::all();
        $ciriFisik = CiriFisik::all();
        $umur = TinggiBadan::select('umur')->distinct()->orderBy('umur', 'asc')->get();
        return view('pages.dashboardpage.diagnosa.create', compact('judulHalaman', 'jenisKelamin', 'ciriFisik', 'umur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'umur' => ['required', 'numeric', 'min:0', 'max:60', 'exists:tinggi_badan,umur'],
            'jenis_kelamin' => ['required', 'exists:jenis_kelamin,id'],
            'tinggi_badan' => ['required', 'exists:tinggi_badan,id'],
            'ciri_fisik' => ['required', 'exists:ciri_fisik,id'],
        ]);
        $jenisKelamin = JenisKelamin::findOrFail($request->jenis_kelamin)->kode;
        $tinggiBadan = TinggiBadan::findOrFail($request->tinggi_badan)->kode;
        $ciriFisik = CiriFisik::findOrFail($request->ciri_fisik)->kode;
        if ($jenisKelamin == 'A1') {
            if (
                $tinggiBadan == 'B3' ||
                $tinggiBadan == 'B5' ||
                $tinggiBadan == 'B7' ||
                $tinggiBadan == 'B9' ||
                $tinggiBadan == 'B11' ||
                $tinggiBadan == 'B13' ||
                $tinggiBadan == 'B15' ||
                $tinggiBadan == 'B17' ||
                $tinggiBadan == 'B19' ||
                $tinggiBadan == 'B21' ||
                $tinggiBadan == 'B23' ||
                $tinggiBadan == 'B25' ||
                $tinggiBadan == 'B27' ||
                $tinggiBadan == 'B29' ||
                $tinggiBadan == 'B31' ||
                $tinggiBadan == 'B33'
            ) {
                if (
                    $ciriFisik == 'C1' ||
                    $ciriFisik == 'C2' ||
                    $ciriFisik == 'C4' ||
                    $ciriFisik == 'C5' ||
                    $ciriFisik == 'C6' ||
                    $ciriFisik == 'C7' ||
                    $ciriFisik == 'C8' ||
                    $ciriFisik == 'C9'
                ) {
                    $hasilPerhitungan = 'D1';
                }
            } else if (
                $tinggiBadan == 'B2' ||
                $tinggiBadan == 'B4' ||
                $tinggiBadan == 'B6' ||
                $tinggiBadan == 'B8' ||
                $tinggiBadan == 'B10' ||
                $tinggiBadan == 'B12' ||
                $tinggiBadan == 'B14' ||
                $tinggiBadan == 'B16' ||
                $tinggiBadan == 'B18' ||
                $tinggiBadan == 'B20' ||
                $tinggiBadan == 'B22' ||
                $tinggiBadan == 'B24' ||
                $tinggiBadan == 'B26' ||
                $tinggiBadan == 'B28' ||
                $tinggiBadan == 'B30' ||
                $tinggiBadan == 'B32' ||
                $tinggiBadan == 'B34'
            ) {
                if (
                    $ciriFisik == 'C1' ||
                    $ciriFisik == 'C2' ||
                    $ciriFisik == 'C4' ||
                    $ciriFisik == 'C5' ||
                    $ciriFisik == 'C6' ||
                    $ciriFisik == 'C7' ||
                    $ciriFisik == 'C8' ||
                    $ciriFisik == 'C9'
                ) {
                    $hasilPerhitungan = 'D2';
                }
            }
        } else if ($jenisKelamin == 'A2') {
            if (
                $tinggiBadan == 'B35' ||
                $tinggiBadan == 'B37' ||
                $tinggiBadan == 'B39' ||
                $tinggiBadan == 'B41' ||
                $tinggiBadan == 'B43' ||
                $tinggiBadan == 'B45' ||
                $tinggiBadan == 'B47' ||
                $tinggiBadan == 'B49' ||
                $tinggiBadan == 'B51' ||
                $tinggiBadan == 'B53' ||
                $tinggiBadan == 'B55' ||
                $tinggiBadan == 'B57' ||
                $tinggiBadan == 'B59' ||
                $tinggiBadan == 'B61' ||
                $tinggiBadan == 'B63' ||
                $tinggiBadan == 'B65' ||
                $tinggiBadan == 'B67'
            ) {
                if (
                    $ciriFisik == 'C1' ||
                    $ciriFisik == 'C2' ||
                    $ciriFisik == 'C4' ||
                    $ciriFisik == 'C5' ||
                    $ciriFisik == 'C6' ||
                    $ciriFisik == 'C7' ||
                    $ciriFisik == 'C8' ||
                    $ciriFisik == 'C9'
                ) {
                    $hasilPerhitungan = 'D1';
                }
            }

            if (
                $tinggiBadan == 'B36' ||
                $tinggiBadan == 'B38' ||
                $tinggiBadan == 'B40' ||
                $tinggiBadan == 'B42' ||
                $tinggiBadan == 'B44' ||
                $tinggiBadan == 'B46' ||
                $tinggiBadan == 'B48' ||
                $tinggiBadan == 'B50' ||
                $tinggiBadan == 'B52' ||
                $tinggiBadan == 'B54' ||
                $tinggiBadan == 'B56' ||
                $tinggiBadan == 'B58' ||
                $tinggiBadan == 'B60' ||
                $tinggiBadan == 'B62' ||
                $tinggiBadan == 'B64' ||
                $tinggiBadan == 'B66' ||
                $tinggiBadan == 'B68'
            ) {
                if (
                    $ciriFisik == 'C1' ||
                    $ciriFisik == 'C2' ||
                    $ciriFisik == 'C4' ||
                    $ciriFisik == 'C5' ||
                    $ciriFisik == 'C6' ||
                    $ciriFisik == 'C7' ||
                    $ciriFisik == 'C8' ||
                    $ciriFisik == 'C9'
                ) {
                    $hasilPerhitungan = 'D2';
                }
            }
        }

        $hasilDiagnosa = HasilDiagnosa::where('kode', $hasilPerhitungan)->first();

        if ($hasilDiagnosa->kode == 'D1') {
            $data = SolusiStunting::where('jenis_saran', 'pengobatan')->get();
            foreach ($data as $row) {
                if ($request->umur >= $row->umur_minimal && $request->umur <= $row->umur_maksimal) {
                    $solusiStunting = $row;
                }
            }
        } else {
            $solusiStunting = SolusiStunting::where('jenis_saran', 'pencegahan')->first();
        }

        HasilPerhitungan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan' => $request->tinggi_badan,
            'ciri_fisik' => $request->ciri_fisik,
            'hasil_diagnosa' => $hasilDiagnosa->id,
            'solusi_stunting' => $solusiStunting->id,
            'user' => auth()->user()->id,
        ]);

        $data = HasilPerhitungan::latest('created_at')->first();

        return redirect()->route('hasil-perhitungan.show', $data->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(HasilPerhitungan $hasilPerhitungan)
    {
        $judulHalaman = 'Diagnosa - Input';
        return view('pages.dashboardpage.diagnosa.show', compact('judulHalaman', 'hasilPerhitungan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilPerhitungan $hasilPerhitungan)
    {
        $hasilPerhitungan->delete();
        return redirect()->route('hasil-perhitungan.index')
            ->with('success', 'Data berhasil dihapus!');
    }

    public function getData(Request $request)
    {
        $jk = $request->jenis_kelamin;
        $umur = $request->umur;
        $data = TinggiBadan::where('jenis_kelamin', $jk)->where('umur', $umur)->get();
        return response()->json(['data' => $data]);
    }
}
