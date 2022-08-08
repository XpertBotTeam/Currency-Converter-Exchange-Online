<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model 
{

    protected $table = 'login-form';
    public $timestamps = true;
    protected $fillable = array('Username-id', 'Email', 'password');
    protected $visible = array('Username-id', 'Email', 'password');

    public function Name()
    {
        return $this->hasOne('Fields', 'Host-Name-App');
    }

}