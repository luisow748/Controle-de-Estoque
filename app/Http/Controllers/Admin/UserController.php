<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('site.admin.users.index');
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

    public function show()
    {

    }

    public function userArea()
    {

        return view('site.index.index', ['section' => 'Área do usuário']);
    }
}
