<?php

namespace app\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//use HasFactory;
	protected $table = 'categories';
    protected $primaryKey = 'id_category';

	protected $fillable = ['name', 'description', 'section_id', 'section_name'];

	protected $attributes = [
		'description' => 'Descrição'
	];
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }


    public function items()
    {
        return $this->hasMany(Item::class);
	}

}
