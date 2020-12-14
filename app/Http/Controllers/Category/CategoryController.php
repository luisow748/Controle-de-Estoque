<?php

namespace App\Http\Controllers\Category;



use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;

use App\Models\Item;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller{

    public function index(Request $request)
    {
        $categories = Category::query()->orderBy('section_id')->get();
        $section = Section::query();
        $message =$request->session()->get('message');

        return view('site.category.index', compact('categories', 'message', 'section'));
    }

    public function create()
    {
        $section = Section::query()->orderBy('name')->get();
        return view('site.category.create')->with(compact('section'));
    }
    public function store(CategoryFormRequest $request)
    {
        DB::beginTransaction();
        $section = Section::where('id_section',$request->section_id)->first();

        $category = Category::create([
            'section_name' => $section->name,
            'name' => $request->name,
            'description' => $request->description,
            'section_id' => $request->section_id
            ]);
        DB::commit();

        $request->session()->flash(
            'message',"Categoria [{$category->id_category}] ({$category->name}) criada com sucesso"
        );
        return redirect()->route('list_category');
    }

    public function update(Request $request)
    {
        $cat = Category::find($request->id);
        $section = Section::query()->orderBy('name')->get();
        return view('site.category.create', compact('cat', 'section'));
    }

    public function destroy(Request $request)
    {

        // $category->items()->delete();
        Category::destroy($request->id);

        $request->session()->flash(
            'message', "Categoria {$request->name} removido com sucesso"
        );
        return redirect()->route('list_category');
    }

    public function returnCategory(Request $request)
    {
        //recebemos nosso par�metro vindo do form
        $parametro = isset($request->section) ? $request->section : null;

        $categories = DB::select('SELECT * FROM `categories` WHERE `section_id` = ?', [$parametro]);


        $text = "<select  class='form-control' name='category_id' id='category' >
                        ";
        foreach ($categories as $cat)
        {
           $text .= "<option value='".$cat->id_category."'> ".$cat->name." </option>";

        }
        $text .= "</select>";
        echo $text;



       return;
    }
}
