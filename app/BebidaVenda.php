<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Venda;
use App\Bebida;

class BebidaVenda extends Model
{
    protected $fillable = ['quantidade_entrada', 'preco_entrada', 'bebida_id'];

    protected $hidden = ['updated_at'];

    public function venda()
    {
        return $this->belongsTo(Venda::class, 'venda_id');
    }

    public function bebida()
    {
        return $this->belongsTo(Bebida::class, 'bebida_id');
    }
}
