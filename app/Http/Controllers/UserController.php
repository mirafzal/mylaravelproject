<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
//        User::factory()->count(10)->create();
        $users = User::all();
        return view('users', ['users' => $users]);
    }
}
