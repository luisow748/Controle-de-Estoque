<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{


    protected $fillable = ['id_subcategory','name', 'description','category_name','category_id'];
    protected $primaryKey = 'id_subcategory';
    protected $table = "subcategory";

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
