<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnterController extends Controller
{
    public function index()
    {

        return view('aut.index');
    }

    public function enter(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])));
        {
            return redirect()->back()
                ->withErrors('Usuário e/ou senha incorretos');
        }
        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function create()
    {
        return view('aut.register');
    }

    public function store()
    {

    }
}
