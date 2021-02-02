<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationFormRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $location = Location::query()->get();
        $message = $request->session()->get('message');
        return view('site.location.index', compact('location', 'message'));
    }
    public function create()
    {
        return view('site.location.create');
    }
    public function store(LocationFormRequest $request)
    {
        DB::beginTransaction();

            $location = Location::create($request->all()); //cria novo local
            $request->session()->flash(
                'message',"Local {$location->id} ({$location->name}) criado com
                sucesso "
            );

        DB::commit();

         return redirect()->route('list_location');

    }
    public function update(int $id)
    {
        $loc = Location::find($id);
        return view('site.location.create', ['loc'=> $loc]);
    }
    public function store_update(Request $request)
    {
        DB::beginTransaction();
            $loc = Location::find($request->id);
            $loc->update($request->all());
            $loc->save();
        DB::commit();
        $request->session()->flash(
            'message',"Local {$loc->id} ({$loc->name}) Atualizado com sucesso"

        );

       return redirect()->route('list_location');
    }

    public function destroy(Request $request)
    {
        Location::destroy($request->id);
        $request->session()->flash(
            'message',
            "Local removido com sucesso"
        );
        return redirect()->route('list_location');
    }
}
