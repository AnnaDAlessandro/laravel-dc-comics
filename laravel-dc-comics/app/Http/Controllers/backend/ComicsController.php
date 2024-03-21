<?php

namespace App\Http\Controllers\backend;
use App\Models\Comics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();
        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $formData = $request->all();

    $new_comic = new Comics(); // Corrected the model name
    $new_comic->fill($formData); // Fill the model with form data
    $new_comic->save();

    return redirect()->route('comics.show', ['comics' => $new_comic->id]);
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comics::findOrFail($id); // Utilizzo del modello Comics
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comics::findOrFail($id);
        return view('pages.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();
        $comic = Comics::findOrFail($id);
        $comic->update($formData);
        return redirect()->route('comics.show', ['comics' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comics::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
