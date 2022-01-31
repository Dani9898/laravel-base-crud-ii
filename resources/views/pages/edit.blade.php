@extends('layouts.main-layout')

@section('content')
    
    <h1>Create new movie</h1>   
    
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li> {{ $error }} </li>
                @endforeach    
            </ul>    
        </div>       
    @endif

    <form action="{{ route('update', $movie -> id) }}" method="POST">

        @method("POST")
        @csrf

        <label for="title">title</label>
        <input type="text" name="title" placeholder="title" value="{{ $movie -> title }}"> <br>

        <label for="title">subtitle</label>
        <input type="text" name="subtitle" placeholder="subtitle" value="{{ $movie -> subtitle }}"> <br>

        <label for="title">Release Date</label>
        <input type="date" name="release_date" placeholder="release_date" value="{{ $movie -> release_date }}"> <br>

        <input type="submit" value="CREATE">

    </form>

@endsection