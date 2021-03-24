<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',

        // $hidden remove da colection (retorno) os campos especificados da consulta.
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

        // $casts altera o tipo da coluna.
    ];

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}




 // ================== RELAÇÃO ENTRE MODELS ================
// 1:1 - Um para Um (Usuário e Loja)
// Ex: Um usuário poder uma loja e uma loja pode pertencer á Um usuário.

// Relação = hasOne e belongsTo

// 1:N - Um para muitos (Loja e Produtos)
// Ex: Uma loja pode ter muitos produtos e um produto pode pertencer á uma loja.

// Relação = hasMany e belongsTo

// N:N - Muitos para Muitos (Produtos e Categorias)
// Muitos produtos podem ter muitas categorias e Muitas categorias podem pertencer á muitos produtos.

// Relação = belongsToMany
