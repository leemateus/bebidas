<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nome'];

    protected $hidden = ['updated_at', 'created_at'];
}
