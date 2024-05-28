@extends ('layouts.app')
@section('title', 'Modifica')
@section('content')
<section class="container py-4 col-10">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
    <!-- token -->
    @csrf 
    @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="titlelHelp" name="title" value="{{$comic->title}}">
            <div id="titleHelp" class="form-text">Inserisci un titolo</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="inserisci un descrizione">
                {{$comic->description}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb" value="{{$comic->thumb}}">
            <div id="thumbHelp" class="form-text">Inserisci una immagine</div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" aria-describedby="priceHelp" name="price" value="{{$comic->price}}"> in &dollar;
            <div id="priceHelp" class="form-text">Inserisci un prezzo</div>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series" value="{{$comic->series}}">
            <div id="seriesHelp" class="form-text">Inserisci un titolo</div>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di lancio</label>
            <input type="text" class="form-control" id="title" aria-describedby="sale_dateHelp" name="sale_date" value="{{$comic->sale_date}}">
            <div id="sale_dateHelp" class="form-text">Inserisci una data</div>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select name="type" id="type" class="form-control" value="{{$comic->type}}">
                <option value="all" > All</option>
                <option value="comic book" > Comic Book</option>
                <option value="graphic novel"> Graphic Novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"> Modifica</button>
        <button type="submit" class="btn btn-danger"> Annulla</button>

    </form>
</section>
@endsection