<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galerie::all();
        return view('galerie', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createGalerie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateForm = $request->validate([
            "name" => "string|required",
        ]);
        $newGalerie = new Galerie;
        $newGalerie->name = $request->name;
        $newGalerie->imageCategorie = $request->file('imageCategorie')->hashName();
        $newGalerie->save();
        $request->file('imageCategorie')->storePublicly('images', 'public');
        return redirect('/galerie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::all();
        $galerie = Galerie::find($id);
        return view('showGalerie', compact('galerie', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerie = Galerie::find($id);
        Storage::disk('public')->delete('images/' . $galerie->imageCategorie);
        $galerie->delete();
        return redirect()->back();
    }
}