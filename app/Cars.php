<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $fillable = ['cars','marque','energie','number_port','couleur','kilometrage','abs','gps','climatisation','matricule','prix','etat','description','deleted','image1','image2','image3','id_agence'];
}
