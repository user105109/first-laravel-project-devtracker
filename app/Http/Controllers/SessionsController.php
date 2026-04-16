<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(SessionsRequest $request) {
        $userCred = $request->validated();
        if (Auth::attempt($userCred)) {
            $request->session()->regenerate();
            return redirect()->intended('/projects');
        }

        return back()->withErrors([
            'error' => "You're credentials are wrong. Please try again"
        ]);
    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
