<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishStoreRequest;
use App\Http\Requests\DishUpdateRequest;
use App\Models\Dish;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Redirect;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('dishes.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DishStoreRequest $request)
    {
        $dish = new Dish();
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->category = $request->category;
        $dish->description = $request->description;
        $dish->rating = $request->rating;
        $dish->created_at = $request->created_at;
        $dish->save();

        $dish->ingredients()->sync($request->ingredients);
        return Redirect()->route('dishes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dish = Dish::findorfail($id);
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ingredients = Ingredient::all();
        $dish = Dish::findorfail($id);
        return view('dishes.edit', compact('ingredients', 'dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DishUpdateRequest $request, $id)
    {
        $dish = Dish::findorfail($id);
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->category = $request->category;
        $dish->description = $request->description;
        $dish->rating = $request->rating;
        $dish->created_at = $request->created_at;
        $dish->save();

        $dish->ingredients()->sync($request->ingredients);
        return Redirect()->route('dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dish = Dish::findorfail($id);
        $dish->ingredients()->detach();
        $dish->delete();
        return Redirect()->route('dishes.index');
    }
}
