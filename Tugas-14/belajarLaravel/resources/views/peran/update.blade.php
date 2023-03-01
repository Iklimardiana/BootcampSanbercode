@extends('layouts.master')

@section('title')
    Tambah Data Peran
@endsection

@section('sub-title')
    Tambah Data Peran
@endsection

@section('content')
<form action="/peran/{{$peran->id}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label >Gambar</label>
      <input type="file" name="foto" class="form-control">   
    </div>
    <div class="form-group">
      <label>Cast</label>
      <select name="cast_id" class="form-control">
        @forelse ($cast as $item)
            @if ($item->id===$peran->cast_id)
                <option value="{{$item->id}}" selected>{{$item->name}}</option>
            @else
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
           
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
                @if ($item->id===$peran->film_id)
                    <option value="{{$item->id}}" selected>{{$item->judul}}</option>
                @else
                    <option value="{{$item->id}}">{{$item->judul}}</option>
                @endif            
            @empty
                <option value="">Tidak ada peran</option> 
            @endforelse 
        </select>
    </div>
      @error('film_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection