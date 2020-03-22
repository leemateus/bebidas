<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected $fillable = ['ml', 'preco_venda', 'marca_id'];

    protected $hidden = ['id', 'marca_id'];
}
