<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Table extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'image','id_parceiro','id_restaurante', 'descricao', 'lugares','hour08','hour09','hour10','hour11','hour12',
        'hour13','hour14','hour15','hour16','hour17','hour18','hour19','hour20','hour21','hour22',
    ];

    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant','id','id_restaurante');
    }

    public static function list($id_restaurante){
        $table = DB::table('tables')
            ->where('id_restaurante', '=', $id_restaurante)
            ->get();
            return $table;
    }
}
