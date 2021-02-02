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


    public function create()
    {
        return view('aut.register');
    }

    public function edit_user()
    {
        $user = User::find(Auth::id());
        return view('site.user.edit')->with(compact('user'));
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

        public function store_updated_user(Request $request)
    {
        DB::beginTransaction();
            $user = User::find($request->id);
            $user->update($request->all());
            $user->save();
            $request->session()->flash(
                'message', "Usuário editado com sucesso"
            );
        DB::commit();
        return redirect()->route('user_area')->with(compact('user'));
    }

    public function destroy(Request $request){

        User::destroy($request->id);
        $request->session()->flash(
            'message', "Usuário removido com sucesso"
        );
        return redirect()->route('list_users');
    }



    public function user_area()
    {
        $user = User::find(Auth::id());
        return view('site.user.index', compact('user'));
    }

}
