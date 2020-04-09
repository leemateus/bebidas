<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;
use App\EntradaBebida;

class Bebida extends Model
{
    protected $fillable = ['ml', 'preco_venda', 'marca_id'];

    protected $hidden = ['updated_at'];

    public function marca()
    {
        return $this->hasMany(Marca::class, 'marca_id', 'id');
    }

    public function entrada_bebida()
    {
        $this->hasMany(EntradaBebida::class, 'bebida_id');
    }
}
