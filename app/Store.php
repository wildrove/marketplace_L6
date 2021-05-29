<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
   // protected $table = 'tb_lojas'; // Caso nome da sua tabela não esta no padrão (singular) esta definição especifica para o Eloquent qual o nome da tabela deve procurar.

      protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];
      
      public function user()
      {
         return $this->belongsTo(User::class);
      }

      public function products()
      {
         return $this->hasMany(Product::class);
      }
   
}
