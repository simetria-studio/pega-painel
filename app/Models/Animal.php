<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'srg_animal';


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
}
