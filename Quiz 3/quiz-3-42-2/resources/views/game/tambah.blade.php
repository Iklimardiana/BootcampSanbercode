@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('content')
<form action="/game" method="post">
  @csrf
    <div class="form-group">
      <label >Nama Game</label>
      <input type="text" name="name" class="form-control">   
    </div>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Gameplay</label>
      <textarea name="gameplay" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('gameplay')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Developer</label>
        <input type="text" name="developer" class="form-control" >
    </div>
    @error('gameplay')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Year</label>
        <input type="number" name="year" class="form-control" >
      </div>
      @error('year')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection