<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('site.admin.index', ['section'=> 'Admin']);
    }

    public function list_users(Request $request){
        $message = $request->session()->get('message');
        $users = User::query()
        ->orderBy('name')
        ->get();
        return view('site.admin.users.index')
        ->with(compact('users', 'message'));
    }
    public function store_update(Request $request)
    {

        DB::beginTransaction();
            $user = User::find($request->id);
            $user->update($request->all());
            $user->save();
            $request->session()->flash(
                'message', "Usuário editado com sucesso"
            );
        DB::commit();
        return redirect()->route('list_users')->with(compact('user'));
    }
    public function show(Request $request)
    {
        $u = User::find($request->id);
        return view('site.admin.users.show')
            ->with(compact('u'));
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        return view('site.admin.users.update')->with(compact('user'));
    }


}
