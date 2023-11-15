<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function login(Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $req->session()->regenerate();
            $req->session()->flash("login-success");
            return redirect()->intended(route("panel"));
        }

        $req->session()->flash('login-error', 'Login failed.');
        return back();
    }

    public function logout() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->intended(route("home"));
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended(route("panel"));
        } else {
            return view("login");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
