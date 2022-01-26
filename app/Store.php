<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Store extends Model
{
   // protected $table = 'tb_lojas'; // Caso nome da sua tabela não esta no padrão (singular) esta definição especifica para o Eloquent qual o nome da tabela deve procurar.

      protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug', 'logo'];

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
      
      public function user()
      {
         return $this->belongsTo(User::class);
      }

      public function products()
      {
         return $this->hasMany(Product::class);
      }
   
}
