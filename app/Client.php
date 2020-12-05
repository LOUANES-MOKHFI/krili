<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $table = 'client';
    protected $fillable = ['first_name','last_name','email','num_tlfn','num_permis','permis','num_carte_identitie','carte_identitie','id_agence'];
}
