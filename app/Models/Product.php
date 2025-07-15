<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'tabela'; caso queira mudar o nome da tabela que vai usar

    use HasFactory;

    protected $fillable = [
        'name', 'price', 'description', 'slug'
    ];
}
