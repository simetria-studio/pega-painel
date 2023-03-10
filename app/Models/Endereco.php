<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'srg_pessoa_endereco';

    public function getEstado()
    {
        return $this->belongsTo(AuxEstado::class, 'estado', 'id');
    }

}
