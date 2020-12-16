<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class update_category{
    public function update(Request $request)
    {
        DB::beginTransaction();
        $cat = Category::find($request->id_category);
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->section_id = $request->section_id;
        $cat->section_name = $request->section_name;
        $cat->save();

        DB::commit();
        return $cat;
    }
}
