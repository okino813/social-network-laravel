<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return "Utilisateur non trouvé";
        }
        $posts = $user->posts;
        dd($posts);

        return view('test'); // Assurez-vous d'avoir une vue nommée 'test.blade.php'
    }

}
