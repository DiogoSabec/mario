<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;
use App\Models\category;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();
        $users = user::all();
        $categories = category::all();
        return view('posts.index')->with(['posts' => $posts, 'users' => $users, 'categories' => $categories]);
    }

    public function create()
    {
             $users = User::all();
             $categories = Category::all();
            return view('posts.create',['users' => $users], ['categories' => $categories]);
    }

    public function store(Request $request)
    {    

        post::create([
            'name'=> $request->input('name'),
            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->action([PostController::class, 'index']);
    }

    public function edit(post $post)
    {          
        $users = User::all(); // adicione esta linha para buscar todos os usuários
        $categories = Category::all();
    
        return view('posts.edit', compact('post', 'users', 'categories'));      

    }

    public function update(Request $request, post $post)
    {
        $post->name =  $request->input('name');
        $post->title =  $request->input('title');
        $post->user_id =  $request->input('user_id');
        $post->category_id =  $request->input('category_id');
        $post->save();
 

        return redirect()->action([PostController::class, 'index']);
    }

    public function destroy(post $post)
    {
        
        $post->delete();
        
        return redirect()->action([PostController::class, 'index']);
    }
}
