<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SigninController extends Controller
{
    public function index() {
        return view('sign-in.index', ['title' => 'Sign In']);
    }
    
    public function generate(Request $request) {
        $approved = $request->validate([
            'username' => 'required|min:2|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:3|max:255|'
        ]);

        $approved['password'] = bcrypt($approved['password']);

        User::create($approved);
        $request->session()->flash('nice', 'Account has been successfully added!');
        return redirect('/login');
    }
}
