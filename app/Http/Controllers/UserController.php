<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    // aka register
    public function register(Request $req): RedirectResponse {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = new User([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);
        $user->save();

        $req->session()->flash('login-success', 'Registration success. Please login!');

        return redirect()->route('login');
    }

    public function login(Request $req): RedirectResponse
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $req->session()->flash("msg-title", "Blogium Panel");
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $req->session()->regenerate();
            $req->session()->flash("msg", "Hos geldiniz!");
            return redirect()->intended(route("panel"));
        }

        $req->session()->flash('login-error', 'Login failed.');
        return back();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->intended(route("home"));
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->intended(route("panel"));
        } else {
            return view("login");
        }
    }

}
