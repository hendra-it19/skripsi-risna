<?php

namespace App\Http\Controllers;

use App\Models\HasilPerhitungan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = "Manajemen Pengguna";
        $data = User::all();
        $no = 1;
        return view('pages.dashboardpage.pengguna.index', compact('judulHalaman', 'data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judulHalaman = "Manajemen Pengguna";
        return view('pages.dashboardpage.pengguna.create', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'hak_akses' => ['required', 'in:admin,pengguna'],
            'password' => ['required', 'min:8', 'string'],
            'konfirmasi_password' => ['required', 'same:password'],
            'alamat' => ['string'],
            'nomor_handphone' => ['nullable', 'min:10', 'max:16'],
        ]);
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->hak_akses,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'nomor_handphone' => $request->nomor_handphone
        ]);

        return redirect()->route('manajemen-pengguna.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $judulHalaman = "Manajemen Pengguna";
        $user = User::findOrFail($id);
        return view('pages.dashboardpage.pengguna.update', compact('judulHalaman', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if (empty($request->password)) {
            $request->validate([
                'nama' => ['required', 'string'],
                'email' => ['required', 'email', ($request->email == $user->email ? '' : 'unique:users,email')],
                'hak_akses' => ['required', 'in:admin,pengguna'],
                'alamat' => ['string'],
                'nomor_handphone' => ['string', 'min:10', 'max:16'],
            ]);
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->hak_akses,
                'alamat' => $request->alamat,
                'nomor_handphone' => $request->nomor_handphone
            ]);
        } else {
            $request->validate([
                'nama' => ['required', 'string'],
                'email' => ['required', 'email', ($request->email == $user->email ? '' : 'unique:users,email')],
                'hak_akses' => ['required', 'in:admin,pengguna'],
                'password' => ['required', 'min:8', 'string'],
                'konfirmasi_password' => ['required', 'same:password'],
                'alamat' => ['string'],
                'nomor_handphone' => ['string', 'min:10', 'max:16'],
            ]);
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->hak_akses,
                'password' => Hash::make($request->password),
                'alamat' => $request->alamat,
                'nomor_handphone' => $request->nomor_handphone
            ]);
        }
        return redirect()->route('manajemen-pengguna.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        HasilPerhitungan::where('user', $user->id)->delete();
        $user->delete();
        return redirect()->route('manajemen-pengguna.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
