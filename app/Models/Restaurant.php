<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id_parceiro', 'imagem', 'nomerestaurante', 'cnpj', 'ie', 'cep', 'endereco',
        'bairro', 'cidade', 'estado', 'representante', 'rg', 'cpf', 'email',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id_parceiro');
    }
    public function tables()
    {
        return $this->hasMany('App\Models\Table', 'id_restaurante', 'id');
    }

    public function menus(){
        return $this->hasMany('App\Models\Menu', 'id','id_restaurante');
    }

    public static function list($id_parceiro){
        $restaurant = DB::table('restaurants')
            ->where('id_parceiro', '=', $id_parceiro)
            ->get();
            return $restaurant;
    }
}
