@extends('layouts.master')

@section('title')
    Edit Data
@endsection

@section('sub-title')
    Edit Data
@endsection

@section('content')
<form action="/game/{{$game->id}}" method="post">
  @csrf
  @method('put')
    <div class="form-group">
      <label >Nama Game</label>
      <input type="text" name="name" value="{{$game->name}}" class="form-control"placeholder="Masukkan Nama">   
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Gameplay</label>
      <textarea name="gameplay" class="form-control" cols="30" rows="10">{{$game->gameplay}}</textarea>
    </div>
    @error('gameplay')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label >Developer</label>
        <input type="text" name="developer" value="{{$game->developer}}" class="form-control">   
      </div>
    @error('developer')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Year</label>
        <input type="number" name="year" value="{{$game->year}}" class="form-control" >
      </div>
      @error('umur')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <button type="submit" class="btn btn-primary" onclick="showdata('/game')">Submit</button>
</form>
<script>
    function showdata(url){
        Swal.fire({
        title: "Berhasil!",
        text: "Memasangkan script sweet alert",
        icon: "success",
        confirmButtonText: "Cool",
        });
    }
</script>
@endsection