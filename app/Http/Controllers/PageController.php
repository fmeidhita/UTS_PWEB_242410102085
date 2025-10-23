<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data anggota HIMATIF
    private $anggota = [
        'dino' => [
            'nama' => 'Dino Rifiki',
            'nim' => '222410102084',
            'jabatan' => 'Ketua'
        ],
        'meidhita' => [
            'nama' => 'Meidhita Faulina',
            'nim' => '242410102085',
            'jabatan' => 'Sekretaris'
        ],
        'dini' => [
            'nama' => 'Dini Aulia',
            'nim' => '242410102087',
            'jabatan' => 'Bendahara'
        ],
        'melindia' => [
            'nama' => 'Melindia',
            'nim' => '232410102067',
            'jabatan' => 'Kepala Divisi PSDM'
        ],
        'rizza' => [
            'nama' => 'Rizza Atika',
            'nim' => '232410102056',
            'jabatan' => 'Kepala Divisi LITBANG'
        ],
        'nafisa' => [
            'nama' => 'Nafisa Meiva',
            'nim' => '222410102045',
            'jabatan' => 'Kepala Divisi HUMAS'
        ],
        'tino' => [
            'nama' => 'Tino Rizki',
            'nim' => '222410102044',
            'jabatan' => 'Kepala Divisi MEDIATEK'
        ],
    ];

    // Halaman login
    public function login()
    {
        return view('login');
    }

    // Proses login
    public function doLogin(Request $request)
    {
        $username = strtolower($request->input('username'));
        $password = $request->input('password');

        // cek username dan password
        if (isset($this->anggota[$username]) && $password === '123456') {
            session(['user' => $this->anggota[$username]]);

            // menirim username lewat query parameter
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->with('error', 'Username atau password salah!');
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $user = session('user');
        if (!$user) {
            return redirect('/')->with('error', 'Silakan login dulu!');
        }

        $username = $request->query('username');
        if (!$username && isset($user['nama'])) {
            $username = strtolower(str_replace(' ', '', $user['nama']));
        }

        return view('dashboard', compact('user', 'username'));
    }

    // Pengelolaan
    public function pengelolaan(Request $request)
    {
        $user = session('user');
        if (!$user) {
            return redirect('/')->with('error', 'Silakan login dulu!');
        }

        $username = $request->query('username');
        if (!$username && isset($user['nama'])) {
            $username = strtolower(str_replace(' ', '', $user['nama']));
        }

        $anggota = $this->anggota;
        return view('pengelolaan', compact('anggota', 'user', 'username'));
    }

    // Profile
    public function profile(Request $request)
    {
        $user = session('user');
        if (!$user) {
            return redirect('/')->with('error', 'Silakan login dulu!');
        }

        $username = $request->query('username');
        if (!$username && isset($user['nama'])) {
            $username = strtolower(str_replace(' ', '', $user['nama']));
        }

        return view('profile', compact('user', 'username'));
    }

    // Logout
    public function logout()
    {
        session()->forget('user');
        return redirect('/')->with('success', 'Kamu telah logout.');
    }
}
