<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientStoreRequest;
use App\Http\Requests\IngredientupdateRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IngredientStoreRequest $request) 
    {
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->type = $request->type;
        $ingredient->allergy = $request->allergy;

        $ingredient->created_at = $request->created_at;
        $ingredient->save();

        return Redirect()->route('ingredients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ingredient = Ingredient::findorfail($id);


        return view('ingredients.edit', compact('ingredient'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IngredientupdateRequest $request, Ingredient $ingredient)
    {
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->type = $request->type;
        $ingredient->allergy = $request->allergy;

        $ingredient->created_at = $request->created_at;
        $ingredient->save();

        return Redirect()->route('ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ingredient = Ingredient::findorfail($id);
        $ingredient->delete();
        return Redirect()->route('ingredients.index');
    }
}
