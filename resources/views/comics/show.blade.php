@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<div class="container p-4">
    
    <h1 class="text-center">{{ $comic->title }}</h1>
    <div class="d-flex justify-content-center ">
        <img src="{{$comic->thumb}}" alt="{{ $comic->title }}">
    </div>
    <div class="py-4">
        {{$comic->description}}
    </div>
    <div class="text-center">
        <h4>
            Series: {{$comic->series}}
        </h4>
        <h4>
            Price: &euro; {{$comic->price}}
        </h4>
    </div>
    <!-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Rimuovi" class="btn btn-danger">
    </form> -->
    <h3 class="text-uppercase text-center pt-4">
        <a href="{{route('comics.index')}}" class="btn btn-dark d-flex col-2">Torna indietro</a>
    </h3>
</div>

@endsection