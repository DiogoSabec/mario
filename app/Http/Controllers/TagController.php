<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = tag::all();
        
        return view('tags.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {    

        tag::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->action([TagController::class, 'index']);
    }

    public function edit(tag $tag)
    {                
        return view('tags.edit', ['tag' => $tag]);
    }

    public function update(Request $request, tag $tag)
    {
        $tag->name =  $request->input('name');
        $tag->save();

        // $tags->update([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        // ]);

        return redirect()->action([TagController::class, 'index']);
    }

    public function destroy(tag $tag)
    {
        $tag->delete();
        
        return redirect()->action([TagController::class, 'index']);
    }
}
