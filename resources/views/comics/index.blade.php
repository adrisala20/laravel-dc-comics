@extends('layouts.app')
@section ('title', 'Laravel Comics')
@section('content')
<section>
    @include ('partials.jumbotron')
    <div class="container p-4">
        <div class="row">
        @foreach ($comics as $comic )

            <div class=" d-flex col-12 col-md-4 col-lg-2 pt-5">
                 <div class="mycard" >
                    <img src="{{ $comic->thumb }}"class="image-fluid w-100" alt="{{$comic->title}}">
                    <div class="card-body bg-black ">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p>{{ Str::limit ($comic->description,20)}}</p>
                        <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">scopri di più</a>
                        <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-primary" ms-3>modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="d-grid col-2 mx-auto py-5">
            <button type="button" class="button-main btn fs-5 text-uppercase ">
                    load more
            </button>
        </div>
    </div>
 
</section>
@endsection