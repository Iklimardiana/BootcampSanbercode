@extends('layouts.master')

@section('title')
    Tambah Genre
@endsection

@section('sub-title')
    Tambah Genre
@endsection

@section('content')
<form action="/genre" method="post">
  @csrf
    <div class="form-group">
      <label >Nama</label>
      <input type="text" name="name" class="form-control"placeholder="Masukkan Nama">   
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection