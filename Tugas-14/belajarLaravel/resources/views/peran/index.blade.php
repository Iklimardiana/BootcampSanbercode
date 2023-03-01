@extends('layouts.master')

@section('title')
    Halaman List Peran
@endsection

@section('sub-title')
    Halaman list peran
@endsection

@section('content')
<a href="/peran/create" class="btn btn-primary btn-sm mb-4">Tambah Pos</a>
<div class="row">
    @forelse ($peran as $item)
    <div class="col-4">
        <div class="card" >
            <img class="card-img-top" src="{{asset('image/'. $item->foto)}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$item->nama}}</h5>
              <p class="card-text">pppppppppp</p>
              <a href="/peran/{{$item->id}}" class="btn btn-primary btn-block btn-sm">Read More</a>
              <div class="row my-2">

                @auth
                <div class="col">
                    <a href="/peran/{{$item->id}}/edit" class="btn btn-warning btn-block btn-sm">Edit</a>
                </div>
                <div class="col">
                    <form action="peran/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger btn-block btn-sm" value="delete">
                    </form>
                </div>
                @endauth  
              </div>             
            </div>          
        </div>
    </div>
    @empty
        <h2>tidak ada postingan</h2>
    @endforelse
    
</div>
@endsection