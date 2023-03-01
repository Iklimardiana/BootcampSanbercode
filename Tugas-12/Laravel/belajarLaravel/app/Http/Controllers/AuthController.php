<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('pages.form');
    }

    public function Welcome(Request $request){
        // dd($request->all());
        $namaDepan = $request['Fname'];
        $namaBelakang = $request['Lname'];

        return view('pages.welcome', ['namaDepan'=>$namaDepan, 'namaBelakang'=>$namaBelakang]);
    }
}
