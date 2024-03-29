<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fazenda extends Model
{
    use HasFactory;

    protected $table = 'srg_pessoa_fazenda';

    protected $fillable = [
        'pessoa',
        'nome',
        'cidade',
        'estado',
    ];
}
