<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $input)
    {
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'is_admin' => $input['is_admin'],
        ]);
        $input->session()->flash(
            'message',"Usuário {$input->name} cadastrado.",
        );
        return redirect('/admin/usuarios');
    }
}
