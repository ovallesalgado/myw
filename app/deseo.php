<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deseo extends Model
{
    protected $table='deseos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id',
        'nombre',
        'precio',
        'descripcion',
        'cuota',
        'ahorro',
        'user_id'
    ];
}
