<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table='favorites';

    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('id_user', 'id_announcement');

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    //protected $hidden = ['created_at','updated_at'];

}
