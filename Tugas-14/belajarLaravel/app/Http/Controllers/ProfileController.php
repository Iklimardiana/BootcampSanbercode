<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::id();

        $profile = profile::where('user_id', $idUser)->first();

        return view('profile.edit', ['profile'=>$profile]);
    }
}
