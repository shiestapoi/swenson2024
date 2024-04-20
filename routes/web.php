<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AllController;

Route::get('/', function () {
    return view('home.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AllController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login.index');
    })->name('login');
    Route::post('/login', function (Request $request) {
        request()->validate([
            'user' => 'required',
            'password' => 'required',
        ]);
        $user = request('user');
        $password = request('password');
        if (Auth::attempt(['username' => $user, 'password' => $password], request('rememberMe')) || Auth::attempt(['email' => $user, 'password' => $password], request('rememberMe'))) {
            request()->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        dd('The provided credentials do not match our records.');
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    });
});