<?php

namespace App\Services\Section;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class update_section{
    public function update(Request $request){
        DB::beginTransaction();
            $section = Section::find($request->id_section);
            $section->name = $request->name;
            $section->description = $request->description;
            $section->save();
        DB::commit();

        return $section;
    }

}
