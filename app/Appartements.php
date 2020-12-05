<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartements extends Model
{
   protected $table = 'appartements';
    protected $fillable = ['wilaya','ville','rue','type_appartement','etage','number_room','prix','etat','description','deleted','image1','image2','image3','id_agence'];
}
