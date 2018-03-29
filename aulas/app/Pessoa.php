<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $guarded = [];

    public function dependentes()
    {
        return $this->hasMany(Dependente::class);
    }
}
