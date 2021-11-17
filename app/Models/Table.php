<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'image','id_parceiro', 'descricao', 'lugares','hour08','hour09','hour10','hour11','hour12',
        'hour13','hour14','hour15','hour16','hour17','hour18','hour19','hour20','hour21','hour22',
    ];
}
