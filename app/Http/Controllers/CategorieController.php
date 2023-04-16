<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function welcome(){
        $category = Categorie::all();
        return view('welcome')->with('category', $category);
    }

    public function sortCategorie($categorie_id){
        $category = Categorie::find($categorie_id);
        return view('categorie')->with('category', $category->Blog);
    }
}
