<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
     protected $table = 'agence';
    protected $fillable = ['name','wilaya','ville','type_agence','num_tlfn','email','num_reg','id_user','logo','password','deleted'];
}
