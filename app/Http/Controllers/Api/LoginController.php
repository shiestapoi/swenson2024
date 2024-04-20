<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LoginResource;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * store
     *
     * @return void
     */
    public function store(Request $request): LoginResource
    {
        if (empty($request->all())) {
            return new LoginResource(false, 'Request tidak ada atau kosong', null);
        }
        if (empty($request->input('user')) || empty($request->input('password'))) {
            return new LoginResource(false, 'Username atau password tidak boleh kosong', null);
        }

        // Validasi input
        $credentials = $request->validate([
            'user' => 'required|string',
            'password' => 'required|string',
        ]);
        // Cek username atau email
        $user = User::where('username', $credentials['user'])
            ->orWhere('email', $credentials['user'])
            ->first();

        // Validasi password
        if (!$user) {
            return new LoginResource(false, 'User tidak ditemukan', null);
        }
        if (!Hash::check($credentials['password'], $user->password)) {
            return new LoginResource(false, 'Password salah', null);
        }

        return new LoginResource(true, 'Login berhasil', $user);
    }
}
