@extends ('layouts.app')
@section('title', 'crea comic')
@section('content')
<section class="container py-4">
 
    <form action="{{route('comics.store')}}" method="POST">
    <!-- token -->
    @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titlelHelp" name="title" value="{{old('title')}}" required>
            @error('title')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="{{old('description')}}" placeholder="inserisci un descrizione">
            {{old('description')}}
        </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb" value="{{old('thumb')}}">
            <div id="thumbHelp" class="form-text">Inserisci un'immagine</div>
            @error('thumb')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror " id="price" aria-describedby="priceHelp" name="price" value="{{old('price')}}" required>
            <div id="priceHelp" class="form-text">Inserisci un prezzo</div>
            @error('price')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="seriesHelp" name="series" value="{{old('series')}}" required>
            <div id="seriesHelp" class="form-text">Inserisci un titolo</div>
            @error('series')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di lancio</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror " id="title" aria-describedby="sale_dateHelp" name="sale_date" value="{{old('sale_date')}}" required>
            <div id="sale_dateHelp" class="form-text">Inserisci una data</div>
            @error('sale_date')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select value="{{old('type')}}" name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
                <option value="">All</option>
                <option value="comic book"> Comic Book</option>
                <option value="graphic novel"> Graphic Novel</option>
            </select>
            @error('type')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"> Crea</button>
        <button type="submit" class="btn btn-danger"> Annulla</button>

    </form>
</section>
@endsection