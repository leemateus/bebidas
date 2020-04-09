<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bebida;

class Marca extends Model
{
    protected $fillable = ['nome'];

    protected $hidden = ['updated_at', 'created_at'];

    public function bebida()
    {
        return $this->hasMany(Bebida::class);
    }
}
