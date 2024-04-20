<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AllController extends Controller
{
    public function dashboard()
    {
        $user = User::find(auth()->user()->id);
        return view('dashboard.index', compact('user'));
    }
}
