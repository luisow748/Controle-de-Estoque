<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

use App\Models\Section;
use App\Services\Section\update_section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Request $request)
    {
        $section = Section::query()->orderBy('name')->get();
        $message =$request->session()->get('message');

        return view('site.section.index', compact('section', 'message'));
    }
    public function create()
    {
        return view('site.section.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $section = Section::create($request->all());
        $request->session()->flash(
            'message',"Seção {$section->id_section} ({$section->name}) criada com sucesso."
        );
        return redirect()->route('list_section');
    }

    public function update(Request $request)
    {
        $section = Section::where('id_section', $request->id)->first();
        return view('site.section.update')->with(compact('section'));
    }
    public function store_update(Request $request){
        $update_sec = new update_section();
            if($update_sec->update($request)){
                $request->session()->flash(
                    'message',"Seção {$request->name} atualizada com sucesso.",
                    'message_class',"success",
                );
            }else{
                $request->session()->flash(
                    'message',"Seção {$request->name} não foi atualizada.",
                    'message_class',"danger",
                );
            }
        return redirect()->route('list_section');
    }
    public function destroy(Request $request)
    {
        Section::destroy($request->id_section);

        $request->session()->flash(
            'message', "Seção {$request->name} removida com sucesso"
        );
        return redirect()->route('list_section');
    }

}
