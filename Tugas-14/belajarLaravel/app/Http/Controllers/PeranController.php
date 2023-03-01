<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;
use App\Models\peran;
use App\Models\film;
use File;

class PeranController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = peran::get();
        return view('peran.index', ['peran'=>$peran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cast = cast::get();
        $film = film::get();
        return view('peran.tambah', ['cast' => $cast, 'film' => $film]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'film_id'=> 'required',
            'cast_id' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $filename = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('image'), $filename);

        //save ke database
        $peran = new peran;

        $peran->film_id = $request->film_id;
        $peran->cast_id = $request->cast_id;
        $peran->foto = $filename;

        $peran->save();

        return redirect('/peran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peran = peran::find($id);

        return view('peran.detail',['peran'=>$peran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = peran::find($id);
        $cast = cast::get();
        $film = film::get();
        return view('peran.update', ['cast' => $cast, 'film' => $film, 'peran'=>$peran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'film_id'=> 'required',
            'cast_id' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg'
        ]);

        $peran = peran::find($id);
        if($request->has('foto')){
            $path = 'image/';

            File::delete($path. $peran->foto);

            $filename = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('image'), $filename);
            $peran->foto = $filename;
            $peran->save();
        }
        $peran->film_id = $request['film_id'];
        $peran->cast_id = $request['cast_id'];
        
        $peran->save();

        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = peran::find($id);

        $path = 'image/';
        File::delete($path. $peran->foto);

        $peran->delete();

        return redirect('/peran');
    }
}
