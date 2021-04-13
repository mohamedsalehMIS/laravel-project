<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model

{
    protected $table    = 'articles';

    protected $fillable = ['name', 'age', 'phone', 'national_id', 'password', 'address', 'about'];

    protected $hidden   = ['created_at','updated_at'];

}
