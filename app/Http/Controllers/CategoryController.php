<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = category::all();
        
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {    

        category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->action([CategoryController::class, 'index']);
    }

    public function edit(category $category)
    {    
                    
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, category $category)
    {
        $category->name =  $request->input('name');
        $category->description =  $request->input('description');
        $category->save();
        return redirect()->action([CategoryController::class, 'index']);
    }

    public function destroy(category $category)
    {
        $category->delete();
        
        return redirect()->action([CategoryController::class, 'index']);
    }
}
