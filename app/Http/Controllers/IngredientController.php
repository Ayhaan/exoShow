<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('admin/ingredients/main', compact('ingredients'));
    }

    //CREATE
    public function create(){
        return view('admin/ingredients/create');
    }
    public function store(Request $request){
        $ingredient = new Ingredient();
        $ingredient->nom = $request->nom;
        $ingredient->quantite = $request->quantite;
        $ingredient->lien = $request->lien;
        $ingredient->save();
        return redirect()->route('ingre.index');
    }

    //DELETE
    public function destroy(Ingredient $id){
        $id->delete();
        return redirect()->route('ingre.index');
    }

    //SHOW
    public function show(Ingredient $id){
        $ingredient = $id;
        return view('admin/ingredients/show', compact('ingredient'));
    }

}
