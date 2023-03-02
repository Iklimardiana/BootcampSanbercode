@extends('layouts.master')

@section('title')
    Detail Game
@endsection

@section('content')

<h2>{{$game->name}} ({{$game->year}})</h2>
<p>Developer: {{$game->developer}}</p>
<h3>Gameplay</h3>
<p>{{$game->gameplay}}</p>

<a href="/game" class="btn btn-secondary btn-sm">Kembali</a>
    
@endsection