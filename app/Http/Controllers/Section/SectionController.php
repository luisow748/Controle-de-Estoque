<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

use App\Models\Section;
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

    public function update()
    {
        return view('site.section.update');
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
