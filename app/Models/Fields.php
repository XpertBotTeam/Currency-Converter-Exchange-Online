<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model 
{

    protected $table = 'Contact';
    public $timestamps = false;
    protected $fillable = array('Apps-id', 'Host-Name-App', 'timestamps');
    protected $visible = array('Apps-id', 'Host-Name-App', 'timestamps');

}