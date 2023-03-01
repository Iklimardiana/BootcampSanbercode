@extends('layouts.master')

@section('title')
    Halaman Detail Peran
@endsection

@section('sub-title')
    Halaman Detail peran
@endsection

@section('content')
    <div class="card" >
        <img class="card-img-top" src="{{asset('image/'. $peran->foto)}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$peran->nama}}</h5>
            <p class="card-text">pppppppppp</p>
            <a href="/peran" class="btn btn-primary btn-block btn-sm">Kembali</a>
        </div>
    </div>
@endsection