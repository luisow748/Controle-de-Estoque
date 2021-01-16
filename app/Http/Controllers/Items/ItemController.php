<?php

namespace App\Http\Controllers\Items;

use App\Classes\Entities\Category as EntitiesCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemsFormRequest;
use App\Models\{Category, Section, SubCategory, Item, Location};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use function PHPUnit\Framework\isEmpty;


class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $category = Category::query()->get();
        $message = $request->session()->get('message');
        return view('site.items.items', compact('category', 'message'));
        // $items = Item::query()->orderBy('id')->get();
        // $category = Category::query()->get();

        // return view('site.items.index', compact('items', 'message', 'category'));
    }

    public function show(Request $request)
    {
        $items = DB::table('items')->find($request->id);
        $categoria = $items->category;
        $categoria_id = $items->category_id;
        $loc = Location::all();
        return view('site.items.show', compact(
            'items', 'categoria', 'categoria_id','loc'
        ));
    }

    public function create(Request $request)
    {
        $section = Section::query()->orderBy('id_section')->get();
        $loc = Location::all();

        return view('site.items.create')->with(compact('section', 'loc'));

    }
    public function createWithCategory(Request $request)
    {
        $categoria_obj = Category::find($request->categoria);

        $categoria = $categoria_obj->name;
        $categoria_id = $categoria_obj->category_id;

        return view('site.items.create')->with(compact( 'categoria', 'categoria_id'));

    }


    public function store(ItemsFormRequest $request)
    {
        DB::beginTransaction();
            $Categoria = Category::find($request->category_id); // seleciona a categoria à qual pertence
            $item = Item::create($request->all()); //cria novo item
            $item->category = "$Categoria->name"; // atualiza o campo categoria do item criado
            $item->save(); // salva a alteração
        DB::commit();
        $request->session()->flash(
            'message',"Item {$item->id} ({$item->name}) criado com sucesso na categoria {$Categoria->name}"
        );

         return redirect()->route('form_update_item', ['id' => $item->id] );

    }
    public function update(int $id, Request $request)
    {
        DB::beginTransaction();
            $item = Item::find($id);
            $item->update($request->all());
            $item->save();
        DB::commit();

        $request->session()->flash(
            'message',"Item {$item->id} ({$item->name}) Atualizado com sucesso"

        );

       return redirect()->route('list_items');

    }


    public function destroy(Request $request)
    {
    Item::destroy($request->id);
        $request->session()->flash(
            'message', "Item removido com sucesso"
        );
        return redirect()->route('list_items');
    }

    public function leave(Request $request){
        DB::beginTransaction();
        $item = Item::find($request->id);
        $item->qty = 0;
        $item->save();
        DB::commit();
        $request->session()->flash(
            'message',"Item {$item->id} ({$item->name}) baixado com sucesso. Quantidade atual: {$item->qty}."

        );
        return redirect()->route('list_items');
    }




    public function edit(int $id)
    {
        $items = Item::find($id);
        $categoria = $items->category;
        $categoria_id = $items->category_id;
        return view('site.items.edit')->with(compact('items', 'categoria', 'categoria_id'));
    }



    public function listItemsFromCategory(Request $request){
        $items = Item::where('category_id', $request->id)->orderBy('name')->get();
        $cat = Category::find($request->id);
        return view('site.items.items_from_category', compact('items', 'cat'));
    }



}
