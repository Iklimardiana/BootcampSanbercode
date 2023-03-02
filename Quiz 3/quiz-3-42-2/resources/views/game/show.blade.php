@extends('layouts.master')

@section('title')
    Data Game
@endsection

@section('content')
<a href="/game/create" class="btn btn-primary btn-sm my-2">Tambah game</a> 
<table class="table">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Gameplay</th>
        <th scope="col">Developer</th>
        <th scope="col">year</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($game as $key => $item)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gameplay}}</td>
            <td>{{$item->developer}}</td>
            <td>{{$item->year}}</td>
            <td>
                <form action="/game/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/game/{{$item->id}}" class="btn btn-info btn-sm" >Detail</a>
                    <a href="/game/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
          </tr>
      @empty
          <tr>
            <td>Data game Kosong</td>
          </tr>
      @endforelse
    </tbody>
  </table> 
@endsection
  