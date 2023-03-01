@extends('layouts.master')

@section('title')
    Tambah Data Peran
@endsection

@section('sub-title')
    Tambah Data Peran
@endsection

@section('content')
<form action="/peran" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label >Gambar</label>
      <input type="file" name="foto" class="form-control">   
    </div>
    @error('foto')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Cast</label>
      <select name="cast_id" class="form-control">
        @forelse ($cast as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @empty
            <option value="">Tidak ada peran</option>
        @endforelse
      </select>
    </div>
    @error('cast_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Film</label>
        <select name="film_id" class="form-control">
          @forelse ($film as $item)
              <option value="{{$item->id}}">{{$item->judul}}</option>
          @empty
              <option value="">Tidak ada Film</option>
          @endforelse
        </select>
    </div>
      @error('film_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection