<?php

namespace App\Http\Controllers;

use App\Models\Montre;
use App\Models\Category;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Récuperer les données de la table produits
        
        //$montreAll = "SELECT*FROM 'produits'";//Méthode 1 
        //$montreAll = Montre::all();//Méthode 2 
        $montreAll = Montre::orderBy('id', 'desc')->get();//Méthode 3
        // $categoryall = Category::all();
        

        //Retourner les données de montreAll à vignette

        return view('child.vignette', compact("montreAll")); //Méthode 1 
        //return view('child.vignette')->with("montreAll",$montreAll); //Méthode 2 
        //return view('child.vignette', ["montreAll" => $montreAll]); //Méthode 3
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
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categoryall = Category::all();
        $montre = Montre::findOrFail($id);
        return view('child.montre')->with("montre", $montre);

        
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
