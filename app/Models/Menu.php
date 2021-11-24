<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public $timestamps = false;

    protected $fillabale = [
        'id_restaurante', 'imagem', 'nome', 'descricao', 'valor'
    ];


    public  function Restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant', 'id', 'id_restaurante');
    }

    public static function list($id_restaurante)
    {
        $menu = DB::table('menus')
            ->where('id_restaurante', '=', $id_restaurante)
            ->get();
        return $menu;
    }
}
