<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];
    
    use HasSlug;
       /**
     * Get the options for generating the slug.
     */
    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function products()
    {
        $this->belongsToMany(Product::class);
    }

}

// Em realções de N:N, o sistema irá procucar a tabela auxiliar ou tabela Pivô.
// Pelo o nome das duas tabelas em ordem alfabeticas
// Ex: Tabelas Product e Category e tabela pivô category_product
// O sistema irá procurar sempre por category_product
