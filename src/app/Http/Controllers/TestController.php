<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('test'); // Assurez-vous d'avoir une vue nommée 'test.blade.php'
    }

}
