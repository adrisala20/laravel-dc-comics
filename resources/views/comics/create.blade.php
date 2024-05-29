@extends ('layouts.app')
@section('title', 'crea comic')
@section('content')
<section class="container py-4">
    <!-- <div class="container">
        @if ($erroes->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endfor
            </ul>
        </div>
        @endif
    </div> -->
    <form action="{{route('comics.store')}}" method="POST">
    <!-- token -->
    @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titlelHelp" name="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="inserisci un descrizione"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb">
            <div id="thumbHelp" class="form-text">Inserisci un'immagine</div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" aria-describedby="priceHelp" name="price">
            <div id="priceHelp" class="form-text">Inserisci un prezzo</div>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series">
            <div id="seriesHelp" class="form-text">Inserisci un titolo</div>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di lancio</label>
            <input type="text" class="form-control" id="title" aria-describedby="sale_dateHelp" name="sale_date">
            <div id="sale_dateHelp" class="form-text">Inserisci una data</div>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-control">
                <option value="">All</option>
                <option value="comic book"> Comic Book</option>
                <option value="graphic novel"> Graphic Novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"> Crea</button>
        <button type="submit" class="btn btn-danger"> Annulla</button>

    </form>
    php artisan make:request
    

    
</section>
@endsection