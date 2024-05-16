<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(comic::all());
        return view("comics.index", ['comics' => Comic::orderBy('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val_data = $request->validate([
            'title' => 'required|min:3|max:250',
            'description' =>'nullable|max:600',
            'thumb' => 'nullable|max:255',
            'price' => 'required|min:2|max:10',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|max:15',
            'type' => 'nullable|max:20',
        ]);
        $data = $request->all();

        $comic = new Comic($val_data);
        $comic->save();

        return to_route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->update($request->all());
        
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
