@extends('layouts.app')

@section('title','DC COMICS| Read Index')

@section('main')
<main>

<h1>Tutti i fumetti</h1>

 <div>
        <a href="{{route('comics.create')}}">Crea Fumetto</a>
    </div>
<table
        class="table table-primary"        
    >
   
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $item )
            <tr class="">
                <td>
                    <a href="{{route('comics.show',$item->id)}}"> {{$item->title}}</a>
                       
                </td>
                <td>{{$item->id}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->thumb}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->series}}</td>
                <td>{{$item->sale_date}}</td>
                <td>{{$item->type}}</td>
                <td>
                    <form action="{{route('comics.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                    </form>
                    <a href="{{route('comics.edit',$item->id)}}">Modifica</a>
                </td>

            </tr>
            @endforeach



        </tbody>
    </table>


@endsection

