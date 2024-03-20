@extends('layouts.app')

@section('title', ' Dc Comics | Create')

@section('main')
    <h2 class="text-center ">Inserisci un nuovo Prodotto</h2>

    <div>
       
        <form action="{{route('comics.store')}}" method="Post">
            @csrf
            <div class="mb-3">

                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="" />

                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>




                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="" />


                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="" />

                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="" />

                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="" />

                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="" />

            </div>

            <button type="submit" class="btn btn-primary "> Crea</button>
        </form>

    </div>

    @endsection