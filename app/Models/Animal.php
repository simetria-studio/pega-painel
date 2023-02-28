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
}
