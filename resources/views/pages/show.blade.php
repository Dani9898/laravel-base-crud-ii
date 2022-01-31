@extends('layouts.main-layout')

@section('content')
    
    <p>

        {{  $movie -> title }} - 
        {{  $movie -> subtitle }} - 
        {{  $movie -> release_date }}

    </p>

@endsection