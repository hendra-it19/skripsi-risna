<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginPage()
    {
        $judulHalaman = 'Login';
        return view('pages.auth.login', compact('judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registerPage()
    {
        $judulHalaman = 'Register';
        return view('pages.auth.register', compact('judulHalaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        $remember = ($request->ingat_saya == "1") ? true : false;

        if (!empty($user) && Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id, $remember);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with('error_login', 'Email atau password anda salah!');
    }

    /**
     * Display the specified resource.
     */
    public function registerPost(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
            'konfirmasi_password' => ['same:password']
        ]);
        $role = null;
        if (User::all() != '[]') {
            $role = 'pengguna';
        } else {
            $role = 'admin';
        }
        $password = Hash::make($request->password);
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $password,
            'role' => $role,
        ]);
        return redirect()->route('auth.login')->with('success', 'Registrasi berhasil, silahkan masuk menggunakan akun anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $judulHalaman = "Profile";
        $user = auth()->user();
        return view('pages.dashboardpage.profile.update', compact('judulHalaman', 'user'));
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
                'alamat' => ['string'],
                'nomor_handphone' => ['string', 'min:10', 'max:16'],
            ]);
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'nomor_handphone' => $request->nomor_handphone
            ]);
        } else {
            $request->validate([
                'nama' => ['required', 'string'],
                'email' => ['required', 'email', ($request->email == $user->email ? '' : 'unique:users,email')],
                'password' => ['required', 'min:8', 'string'],
                'konfirmasi_password' => ['required', 'same:password'],
                'alamat' => ['string'],
                'nomor_handphone' => ['string', 'min:10', 'max:16'],
            ]);
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'alamat' => $request->alamat,
                'nomor_handphone' => $request->nomor_handphone
            ]);
        }
        return redirect()->route('auth.editprofile')
            ->with('success', 'Akun berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
