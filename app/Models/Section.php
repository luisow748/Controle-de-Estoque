<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
   // use HasFactory;

    protected $fillable = ['name', 'description'];
    protected $table = 'sections';
    protected $primaryKey ='id_section';

    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
}
