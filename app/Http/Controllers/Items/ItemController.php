<?php

namespace App\Http\Controllers\Items;

use App\Classes\Entities\Category as EntitiesCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemsFormRequest;
use App\Models\{Category, Section, SubCategory, Item};

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
        return view('site.index.test', compact('category'));
        // $items = Item::query()->orderBy('id')->get();
        // $category = Category::query()->get();
        // $message = $request->session()->get('message');
        // return view('site.items.index', compact('items', 'message', 'category'));
    }

    public function show(Request $request)
    {
        $items = DB::table('items')->find($request->id);
        return view('site.items.show', compact('items'));
    }

    public function create(Request $request)
    {
        $section = Section::query()->orderBy('id_section')->get();

        return view('site.items.create')->with(compact( 'section'));

    }
    public function createWithCategory(Request $request)
    {
        $categoria = Category::find($request->categoria);


        return view('site.items.create')->with(compact( 'categoria'));

    }


    public function store(ItemsFormRequest $request)
    {
        $item = Item::create($request->all()); //cria novo item
        $Categoria = Category::find($request->category_id); // seleciona a categoria à qual pertence
        $item->category = "$Categoria->name"; // atualiza o campo categoria do item criado
        $item->save(); // salva a alteração
        $request->session()->flash(
            'message',"Item {$item->id} ({$item->name}) criado com sucesso na categoria {$Categoria->name}"
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




    public function edit(int $id)
    {
        $items = Item::find($id);
        return view('site.items.edit')->with(compact('items'));
    }


    public function update(int $id, Request $request)
    {
        DB::beginTransaction();
        $item = Item::find($id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->qty = $request->qty;
        $item->minimum_qty = $request->minimum_qty;
        $item->paid_price = $request->paid_price;
        $item->new_price = $request->new_price;
        $item->save();
        DB::commit();

        $request->session()->flash(
            'message',"Item {$item->id} ({$item->name}) Atualizado com sucesso"

        );

       return redirect()->route('list_items');

    }
    public function listItemsFromCategory(Request $request){
        $items = Item::where('category_id', $request->id)->orderBy('name')->get();
        $cat = Category::find($request->id);
        return view('site.items.items_from_category', compact('items', 'cat'));
    }



}
