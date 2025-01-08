<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Masyarakat;
use App\Models\Dokter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Display the registration form.
     */
    public function showRegisterForm()
    {
        return view('auth.registrasi'); // Pastikan path view sudah benar
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        // Validasi data request
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,masyarakat,dokter',
            'nama' => 'required|string',
            'telepon' => 'nullable|string',
            'email' => 'nullable|email', // validasi email opsional
            'alamat' => 'nullable|string',
            'jk' => 'nullable|in:L,P',
            'nik' => 'nullable|string',
        ]);

        DB::transaction(function () use ($request) {
            // Buat record user baru
            $user = User::create([
                'username' => $request->input('username'),
                'password' => Hash::make($request->password),
                'email' => $request->input('email'),
                'role' => $request->role,
            ]);

            Log::debug('Data yang dikirimkan:', $request->all());

            // Buat data terkait di tabel role masing-masing
            switch ($request->role) {
                case 'admin':
                    Admin::create([
                        'user_id' => $user->id,
                        'nama' => $request->nama,
                        'telepon' => $request->telepon,
                    ]);
                    break;

                case 'masyarakat':
                    // Pastikan email hanya diisi jika diperlukan
                    Masyarakat::create([
                        'user_id' => $user->id,
                        'nik'=>$request->nik,
                        'nama' => $request->nama,
                        'jk' => $request->jk,
                        'ttl' => $request->ttl,
                        'telepon'=>$request->telepon,
                        'alamat' => $request->alamat,
                    ]);
                    Log::debug('Data yang dikirimkan:', $request->all());

                    break;

                case 'dokter':
                    Log::debug('Data Dokter:', $request->all());
                    Dokter::create([
                        'user_id' => $user->id,
                        'nama' => $request->nama,
                        'jk' => $request->jk,
                        'ttl' => $request->ttl,
                        'nik'=> $request->nik,
                        'telepon'=>$request->telepon,
                        'alamat' => $request->alamat,
                    ]);
                    Log::debug('Data yang dikirimkan:', $request->all());
                    break;

                default:
                    throw new \Exception('Role tidak valid.');
            }
        });

        return view('auth.login')->with('success', 'User berhasil diregistrasi!');
    }

    /**
     * Display the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan path view sudah benar
    }

    /**
     * Handle user login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate(); // Amankan sesi setelah login
        //     return redirect()->intended('chat')->with('success', 'Login berhasil!');
        // }

        // return redirect()->back()->withErrors(['login' => 'Username atau password salah.']);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = Auth::user();
            
            // Redirect berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin/artikel/daftarartikel')->with('success', 'Login berhasil sebagai Admin!');
                case 'masyarakat':
                    return redirect('/masyarakat/artikel')->with('success', 'Login berhasil sebagai Masyarakat!');
                case 'dokter':
                    return redirect('/dokter/home')->with('success', 'Login berhasil sebagai Dokter!');
                default:
                    Auth::logout();
                    return redirect('/login')->withErrors(['login' => 'Role tidak valid.']);
            }
        }

        return redirect()->back()->withErrors(['login' => 'Email atau password salah.']);
    }

    /**
     * Logout the user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Anda berhasil logout.');
    }
}
