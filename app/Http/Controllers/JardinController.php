<?php

namespace App\Http\Controllers;

use App\Jardin;
use Illuminate\Http\Request;

class JardinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Jardin.index',['datas'=>\App\Jardin::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jardin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jardin = new Jardin();
        
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
        return redirect()->route('Jardin.show',['Jardin'=>$jardin->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jardin  $jardin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Jardin.show',['Jardin'=>Jardin::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jardin  $jardin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jardin=Jardin::findOrFail($id);
        return view('Jardin.edit',['Jardin' =>$jardin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jardin  $jardin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jardin=Jardin::findOrFail($id);
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
        return redirect()->route('Jardin.show',['Jardin'=>$jardin->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jardin  $jardin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jardin=Jardin::findOrFail($id);
        $jardin->delete();
        return redirect()->route('Jardin.index');
    }
}
