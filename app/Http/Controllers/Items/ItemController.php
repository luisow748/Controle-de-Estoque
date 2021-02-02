<?php

namespace App\Http\Controllers\Items;


use App\Http\Controllers\Controller;
use App\Http\Requests\ItemsFormRequest;
use App\Models\{Category, Section, Item, Location};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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
    }

    public function show(Request $request)
    {
        $items = Item::find($request->id);
        $location = Location::all();
        return view('site.items.show', compact('items', 'location'));
    }

    public function create(Request $request)
    {
        $section = Section::query()->orderBy('id_section')->get();
        $location = Location::all();
        return view('site.items.create')->with(compact('section', 'location'));

    }
    public function createWithCategory(Request $request)
    {
        $categoria = Category::find($request->categoria);

        $location = Location::all();
        return view('site.items.create')->with(compact( 'categoria', 'location'));

    }

    public function edit(int $id, Request $request)
    {
        $items = Item::find($id);
        $location = Location::all();
        $message = $request->session()->get('message');
        return view('site.items.edit')->with(compact('items', 'location', 'message'));
    }

    public function store(ItemsFormRequest $request)
    {
        DB::beginTransaction();
            $categoria = Category::find($request->category_id); // seleciona a categoria à qual o item pertence
            $item = Item::create($request->all()); //cria novo item
            $item->category = "$categoria->name"; // atualiza o campo categoria do item criado
            $item->save(); // salva a alteração
        DB::commit();
        $request->session()->flash(
            'message',
            "Item {$item->id} ({$item->name}) criado com sucesso na categoria {$item->category}"
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

    public function listItemsFromCategory(Request $request){
        $items = Item::where('category_id', $request->id)->orderBy('name')->get();
        $cat = Category::find($request->id);
        return view('site.items.items_from_category', compact('items', 'cat'));
    }



}
