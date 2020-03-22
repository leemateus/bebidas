<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $hidden = ['id', 'created_ad', 'update_ad'];
}
