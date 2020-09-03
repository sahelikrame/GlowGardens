<?php

namespace App\Http\Controllers;

use App\Bulbeuse;
use Illuminate\Http\Request;

class BulbeuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Bulbeuse.index',['donnees'=>\App\Bulbeuse::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bulbeuse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jardin = new Bulbeuse();
        
        $jardin->nom=$request->nom;
        $jardin->image=$request->image;
        $jardin->description=$request->description;
        $jardin->nom_botanique=$request->nom_botanique;
        $jardin->info_plante=$request->info_plante;
        $jardin->particularites=$request->particularites;
        $jardin->avantages=$request->avantages;
        $jardin->exposition=$request->exposition;
        $jardin->sol=$request->sol;
        $jardin->quand_semer=$request->quand_semer;
        $jardin->comment_semer=$request->comment_semer;
        $jardin->save();
        return redirect()->route('Bulbeuse.show',['Bulbeuse'=>$jardin->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bulbeuse  $bulbeuse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Bulbeuse.show',['Bulbeuse'=>Bulbeuse::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bulbeuse  $bulbeuse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulbeuse=Bulbeuse::findOrFail($id);
        return view('Bulbeuse.edit',['Bulbeuse' =>$bulbeuse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bulbeuse  $bulbeuse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jardin=Bulbeuse::findOrFail($id);
        $jardin->nom=$request->nom;
        $jardin->image=$request->image;
        $jardin->description=$request->description;
        $jardin->nom_botanique=$request->nom_botanique;
        $jardin->info_plante=$request->info_plante;
        $jardin->particularites=$request->particularites;
        $jardin->avantages=$request->avantages;
        $jardin->exposition=$request->exposition;
        $jardin->sol=$request->sol;
        $jardin->quand_semer=$request->quand_semer;
        $jardin->comment_semer=$request->comment_semer;
        $jardin->save();
        return redirect()->route('Bulbeuse.show',['Bulbeuse'=>$jardin->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bulbeuse  $bulbeuse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jardin=Bulbeuse::findOrFail($id);
        $jardin->delete();
        return redirect()->route('Bulbeuse.index');
    }
}
