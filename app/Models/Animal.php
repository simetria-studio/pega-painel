<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'srg_animal';

    protected $fillable = [
        'nome_completo',
        'numero_chip',
        'especie',
        'raca',
        'registro_tipo',
        'registro_livro',
        'registro_numero',
        'sexo',
        'pai',
        'mae',
        'data_nascimento',
        'fazenda_nascimento',
        'criador',
        'proprietario',
        'pelagem',
        'doador',
        'dna_tipo',
        'dna_data_exame',
        'dna_laboratorio',
        'data_castracao',
        'data_baixa',
        'motivo_baixa',
        'status',
        'observacoes',
        'marca_criador'


    ];

    public function getPai()

    {
        return $this->hasOne(Animal::class, 'id', 'pai'); 
    }

    public function getMae()

    {
        return $this->hasOne(Animal::class, 'id', 'mae'); 
    }

    public function getOwner()
    {
        return $this->hasOne(Owner::class, 'id', 'proprietario');
    }
    public function getCreator()
    {
        return $this->hasOne(Owner::class, 'id', 'criador');
    }
    public function getFazenda()
    {
        return $this->hasOne(Fazenda::class, 'id', 'fazenda_nascimento');
    }
    public function getPelagem()
    {
        return $this->hasOne(Pelagem::class, 'id', 'pelagem');
    }
    public function getLivro()
    {
        return $this->hasOne(Livro::class, 'id', 'registro_livro');
    }

}
