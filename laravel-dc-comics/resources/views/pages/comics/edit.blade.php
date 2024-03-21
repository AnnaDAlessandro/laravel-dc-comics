@extends('layouts.app')

@section('title', ' Dc Comics | Edit')

@section('main')
    <h2 class="text-center ">Modifica il prodotto</h2>

    <div>
       
        <form action="{{route('comics.update',$comic->id)}}" method="POST">
           
        @csrf
        @method('PUT')
            
            <div class="mb-3">

                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')?? $comic->title}}" />

                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')?? $comic->description}}"</textarea>




                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{old('thumb')?? $comic->thumb}}" />


                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price" id="price" value="{{old('price')?? $comic->price}}" />

                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{old('series')?? $comic->series}}" />

                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{old('sale_date')?? $comic->sale_date}}" />

                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type"value="{{old('type')?? $comic->type}}" />

            </div>

            <button type="submit" class="btn btn-primary "> Crea</button>
        </form>

    </div>

    @endsection