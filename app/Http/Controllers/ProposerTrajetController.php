<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trajet;

class ProposerTrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Personne.AjouterTrajet')
            ->withDatas(Trajet::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'Nom_trajet'=>'required|string',
            'ville_depart'=>'required|string',
            'ville_Arrive'=>'required|string',
            'Heure_depart'=>'required|numeric',
            'Heure_Arrive'=>'required|numeric',
            'Nbr_Place_dispo'=>'required|integer',
            'voiture'=>'required|numeric|min:0',
            'Date'=>'required|date',
            'Prix'=>'required|integer|min:0',
        ]);
        // dd($request->all());
        Trajet::create($request->all());
        return redirect()->route('ListeTrajet');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

}
