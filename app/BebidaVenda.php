<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebidaVenda extends Model
{
    protected $fillable = ['quantidade_entrada', 'preco_entrada', 'bebida_id'];

    protected $hidden = ['created_at', 'updated_at', 'id'];
}
