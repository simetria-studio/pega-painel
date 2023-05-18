<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobricao extends Model
{
    use HasFactory;

    protected $table = 'com_comunicacao_cobricao';

    protected $fillable = [
        'reprodutor',
        'especie',
        'tecnico_responsavel',
        'tipo_monta',
        'tipo_cobricao',
        'semen',
        'matriz',
        'data_cobricao',
    ];
}
