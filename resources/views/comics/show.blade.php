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
            Price: &dollar; {{$comic->price}}
        </h4>
    </div>
    <div>
        <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-primary" ms-3>Modifica</a>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline">
             @csrf
             <!-- aggiungo il tipo delete -->
              @method('DELETE')
            <input type="submit" id="comicDelete" value="Rimuovi" class="btn btn-danger ">
        </form>
    </div>
    <h3 class="text-uppercase text-center pt-4">
        <a href="{{route('comics.index')}}" class="btn btn-dark d-flex col-2">Torna indietro</a>
    </h3>
</div>

@endsection