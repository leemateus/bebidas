<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EntradaBebida;

class Entrada extends Model
{
    protected $hidden = ['id', 'update_ad'];

    public function entradaBebida()
    {
        return $this->hasMany(EntradaBebida::class);
    }
}
