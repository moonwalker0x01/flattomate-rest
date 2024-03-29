<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='reviews';
 
    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('description','id_user_wrote', 'id_user_receive', 'id_announcement', 'rating');
 
    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['created_at','updated_at'];

    /* relationships */
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user_wrote');
    }
}
