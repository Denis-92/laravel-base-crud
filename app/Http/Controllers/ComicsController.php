<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    /** PRIMA FUNZIONE VISTA
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /** SECONDA FUNZIONE VISTA
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* controller show
     public function show($id)
    {
        //
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }
    */


    // controller show scritto in forma contratta
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
