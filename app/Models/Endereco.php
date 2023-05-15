<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'srg_pessoa_endereco';

    protected $fillable = [

        'pessoa',
        'cep',
        'endereco',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'tipo',
        'observacao',
        'correspondencia'
    ];

    public function getEstado()
    {
        return $this->belongsTo(AuxEstado::class, 'estado', 'id');
    }
}
