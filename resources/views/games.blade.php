@extends('layouts.app')

@section('content')
    <h1>Games</h1>

    <ul>
        @foreach ($Games as $game)
            <li><a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a></li>
        @endforeach
    </ul>
