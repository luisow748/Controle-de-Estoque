<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

    }
    public function list_users(Request $request){
        $message = $request->session()->get('message');
        $users = User::query()
        ->orderBy('name')
        ->get();
        return view('site.admin.users.index')
        ->with(compact('users', 'message'));
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

    public function update(Request $request)
    {
        $user = User::find($request->id);
        return view('site.admin.users.update')->with(compact('user'));
    }
    public function store_update(Request $request)
    {
        $user = User::find($request->id);
        DB::beginTransaction();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
        $user->save();
        $request->session()->flash(
            'message', "Usuário editado com sucesso"
        );
        DB::commit();
        return redirect()->route('list_users')->with(compact('user'));
    }
    public function destroy(Request $request){

        User::destroy($request->id);
        $request->session()->flash(
            'message', "Usuário removido com sucesso"
        );
        return redirect()->route('list_users');
    }

    public function show(Request $request)
    {
        $u = User::find($request->id);
        return view('site.admin.users.show')->with(compact('u'));
    }

    public function userArea()
    {
        $user_id = Auth::id();

        return view('site.user.index', compact('user_id'));
    }

}
