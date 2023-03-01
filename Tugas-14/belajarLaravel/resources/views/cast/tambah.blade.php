@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('sub-title')
    Tambah Data
@endsection

@section('content')
<form action="/cast" method="post">
  @csrf
    <div class="form-group">
      <label >Nama</label>
      <input type="text" name="name" class="form-control"placeholder="Masukkan Nama">   
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Umur</label>
      <input type="number" name="umur" class="form-control" placeholder="Masukkan umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection