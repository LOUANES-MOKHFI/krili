<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = ['type_resevation','date_reservation','date_fin_reservation','id_vehicule','id_appartement','id_client','id_agence'];
}
