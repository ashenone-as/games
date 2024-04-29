@extends('layouts.app')

@section('content')
    <h1>{{ $game->name }}</h1>

    <p>{{ $game->category}}</p>

    @if ($game->developer)
        <p>Developer: {{ $game->developer->name }}</p>
    @endif


@endsection
