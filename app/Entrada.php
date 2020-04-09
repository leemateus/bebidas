<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EntradaBebida;

class Entrada extends Model
{
    protected $hidden = ['id', 'created_ad', 'update_ad'];

    public function entrada_bebida()
    {
        $this->hasMany(EntradaBebida::class);
    }
}
