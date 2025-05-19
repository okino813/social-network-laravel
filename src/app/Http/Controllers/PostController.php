<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        return view('createPost');

    }


    public function store(Request $request){
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour créer un post.');
        }

        // Validation des champs du formulaire
        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',
            'image' => 'nullable|string|max:255',
            'tags' => 'nullable|string|max:255',
        ]);

        // Création du post lié à l'utilisateur connecté
        $post = Auth::user()->posts()->create([
            'content' => $validatedData['content'],
            'image' => $validatedData['image'] ?? null,
            'tags' => $validatedData['tags'] ?? null,
        ]);

        // Redirection avec message de succès
        return redirect()->route('user.index');

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
