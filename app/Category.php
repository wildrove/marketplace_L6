<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        $this->belongsToMany(Product::class);
    }
}

// Em realções de N:N, o sistema irá procucar a tabela auxiliar ou tabela Pivô.
// Pelo o nome das duas tabelas em ordem alfabeticas
// Ex: Tabelas Product e Category e tabela pivô category_product
// O sistema irá procurar sempre por category_product
