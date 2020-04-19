<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EntradaVenda;

class Venda extends Model
{
    Protected $fillable = ['total'];

    Protected $hidden = ['updated_at'];

    public function bebidaVenda()
    {
        return $this->hasMany(EntradaVenda::class, 'venda_id');
    }
}
