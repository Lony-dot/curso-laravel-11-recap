<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::first(); // Busca o PRIMEIRO usuário na tabela 'users'.
        return view('admin.users.index', compact('user'));   
    }
}
