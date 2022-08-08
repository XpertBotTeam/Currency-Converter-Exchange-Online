<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Values extends Model 
{

    protected $table = 'Cryptocurrencies';
    public $timestamps = false;
    protected $fillable = array('Cyrpto-Currency-id', 'Values', 'timestamps');
    protected $visible = array('Cyrpto-Currency-id', 'Values', 'timestamps');

}