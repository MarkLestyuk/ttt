<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic)
    {
        $comic = \DB::table('comics')->get();
        return view('page', ['comics' => $comic, "n"=>"name", "nap"=>"desc"]);
    }
    public function single_comics($id)
    {
        $comic =\App\Models\comic::find($id);
        return view('page_1', ['com' => $comic]);
    }
    public function showSort($name, $nap)
    {
        $comic = \App\Models\comic::orderBy($name, $nap)->get();
        return view('page', ['comics' => $comic, "n"=>$name, "nap"=>$nap]);
    }
    public function showFilter($name)
    {
        $comic = \App\Models\comic::where("author_id", $name)->get();
        return view('page', ['comics' => $comic, "n"=>"name", "nap"=>"desc"]);
    }
    public function comicsi()
    {
        $date = \DB::table('comics')
            ->orderBy('release_date', 'desc')
            ->limit(5)
            ->get();
        return view('show', ['aee' => $date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        //
    }
}
