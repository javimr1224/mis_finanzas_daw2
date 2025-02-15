<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Obtiene todos los usuarios
        return view('users.index', compact('users')); // Retorna la vista con los datos
    }
}
