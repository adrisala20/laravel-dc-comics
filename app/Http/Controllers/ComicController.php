<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $type = $request->query('search');
            $comics = Comic::where('type',$type)->get();
        } else{
            $comics = Comic::all();
        }
        return view("comics.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreComicRequest $request)
    {
        //validazione
        $form_data = $request->validated();

        //salvataggio e reindirezione dell'utente
        $new_comic = Comic::create($form_data);

        return redirect()->route("comics.index")->with('message',"New Comic created");
    }

    /**
     * Display the specified resource.
     *
     * @param  object Comic  $id
     */
    public function show(Comic $comic)
    {
       return view("comics.show",compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',  compact('comic'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();

        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index', $comic->id)->with('message',"Comic id: {$comic->id} Deleted");
    }
}
