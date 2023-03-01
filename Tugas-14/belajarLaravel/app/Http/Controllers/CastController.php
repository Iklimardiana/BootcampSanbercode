<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }
    
    public function create(){
        return view('cast.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'name.required' => 'Nama Harus diisi',
            'umur.required' => 'Umur harus diisi',
            'bio.required' => 'bio harus diisi'
        ]);

        DB::table('cast')->insert([
            'name' => $request['name'],
            'umur' => $request['umur'],
            'bio' => $request['bio'],
        ]);

        return redirect('/cast');
    }

    public function index(){
        $cast = DB::table('cast')->get();
        // dd($cast);
        return view('cast.show', ['cast' => $cast]);
    }

    public function show($id){
        $cast = DB::table('cast')->find($id);
        return view('cast.detail', ['cast' => $cast]);
    }

    public function edit($id){
        $cast = DB::table('cast')->find($id);
        return view('cast.edit', ['cast'=>$cast]) ;    
    }

    public function update($id, request $request){
        $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'name.required' => 'Nama Harus diisi',
            'umur.required' => 'Umur harus diisi',
            'bio.required' => 'bio harus diisi'
        ]);

        DB::table('cast')
              ->where('id', $id)
              ->update(
                [
                    'name' => $request['name'],
                    'umur' => $request['umur'],
                    'bio' =>$request['bio']
                ]
            );
            return redirect('/cast');
    }

    public function destroy($id){
        DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }
}
