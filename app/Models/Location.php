<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Item;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'email', 'contact', 'phone' ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
