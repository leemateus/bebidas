<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entrada;
use App\Bebida;

class EntradaBebida extends Model
{
    protected $fillable = ['quatidade_entrada', 'preco_entrada'];

    protected $hidden = ['created_at', 'updated_at'];

    public function entrada()
    {
        $this->belongsTo(Entrada::class);
    }

    public function bebida()
    {
        $this->belongsTo(Bebida::class);
    }
}
