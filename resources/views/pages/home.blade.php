@extends('layouts.main-layout')

@section('content')

    <h3>
        <a href="{{ route('create') }}"> CREATE NEW</a>
    </h3>

    <h1>LISTA</h1>

    @foreach ($movies as $movie)

    <li>
        <a href="{{ route('show', $movie -> id ) }}">
            {{ $movie -> title }}
        </a>
        - {{ $movie -> subtitle }}
        - <a href="{{ route('edit', $movie -> id) }}">EDIT</a>
        
    </li>
        

    @endforeach



@endsection