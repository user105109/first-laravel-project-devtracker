<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request) {
        $userData = $request->validated();

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => $userData['password']
        ]);

        Auth::login($user);
        return redirect('/projects');
    }
}
