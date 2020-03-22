<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaBebida extends Model
{
    protected $fillable = ['quatidade_entrada', 'preco_entrada'];

    protected $hidden = ['id', 'bebida_id', 'entrada_id', 'created_at', 'updated_at'];
}
