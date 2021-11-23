<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected $fillabale = [
        'id_restaurante','imagem','nome','descricao','valor'
    ];


    public function scopeRestaurant(){
        return $this->belongsTo('App\Models\Restaurant', 'id', 'id_parceiro');
    }
}
