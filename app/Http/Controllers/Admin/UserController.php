<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function show(Request $request)
    {
        $u = User::find($request->id);
        return view('site.admin.users.show')->with(compact('u'));
    }

    public function userArea()
    {

        return view('site.index.index', ['section' => 'Área do usuário']);
    }
    public function list_users(){
        $users = User::query()
        ->orderBy('name')
        ->get();
        return view('site.admin.users.index')
        ->with(compact('users'));
    }
}
