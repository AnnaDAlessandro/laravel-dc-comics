<?php

namespace App\Http\Controllers;

use App\Models\Comic; // Correzione del nome del modello

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all(); // Utilizzo del nome corretto del modello
        return view('pages.comics.index', compact('comics'));
    }

    public function create()
    {
        return view('pages.comics.create');
    }

    public function store(Request $request)
    {
    
        $formData = $request->all();

        $new_comic = new Comic(); 
        $new_comic->fill();
        $new_comic->save();
    }
}