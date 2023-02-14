<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use App\Models\Montre;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoryall = Category::all();
        // return view('portion.header');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show(Request $request)
    {
        $categoryPere = Category::findOrfail($request->id);
        
        // $produits = $categoryPere->petitFilsProduits()->get(); //Méthode 2
        $produits = $categoryPere->grandPereProduit();

        return view('child.categorie', compact('produits', 'categoryPere'));
    }

    public function slug(Request $request, $id){
        $slug= Slug::findOrfail($request->id);
        $produits = $slug->produits()->get();
        return view('child.categorie', compact('slug', 'produits'));
    }

    /**<
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
