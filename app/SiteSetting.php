<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'sitesetting';
   protected $fillable = ['site_name', 'slegon', 'logo', 'site_email', 'site_phone','adress'];
}
