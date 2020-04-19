<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;
use App\EntradaBebida;
use App\BebidaVenda;

class Bebida extends Model
{
    protected $fillable = ['ml', 'preco_venda', 'marca_id', 'quantidade'];

    protected $hidden = ['updated_at'];

    public function marca()
    {
        return $this->hasMany(Marca::class, 'marca_id', 'id');
    }

    public function entradaBebida()
    {
        $this->hasMany(EntradaBebida::class, 'bebida_id');
    }

    public function bebidaVenda()
    {
        return $this->hasMany(BebidaVenda::class, 'bebida_id');
    }
}
