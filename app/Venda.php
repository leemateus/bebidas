<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EntradaVenda;

class Venda extends Model
{
    Protected $fillable = ['total', 'id', 'created_at', 'funcionario'];

    Protected $hidden = ['updated_at'];

    Protected $attributes = [
        'total' => 0.0,
    ];

    public function bebidaVenda()
    {
        return $this->hasMany(EntradaVenda::class, 'venda_id');
    }
}
