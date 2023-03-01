@extends('layouts.master')

@section('title')
    Tampil Data
@endsection

@section('sub-title')
    Tampil Data
@endsection

@section('content')
@auth
<a href="/cast/create" class="btn btn-primary btn-sm my-2">Tambah Cast</a>
@endauth

<table class="table">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($cast as $key => $item)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    @auth
                      <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    @endauth 
                </form>
            </td>
          </tr>
      @empty
          <tr>
            <td>Data Cast Kosong</td>
          </tr>
      @endforelse
    </tbody>
  </table>
@endsection