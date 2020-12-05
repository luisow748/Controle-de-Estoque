<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSystem extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "pwd",
        "is_admin",
        "is_owner",
        "email",
        "email_verified_at"


    ];
}
