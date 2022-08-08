<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model 
{

    protected $table = 'Main-Data';
    public $timestamps = false;
    protected $fillable = array('Values-id', 'Countries-flag-id', 'Currencies-Charts', 'rate-excahnges-currencies', 'Updated-Gold-Price', 'Sign-Up-User', 'help-user-id', 'timestamps');
    protected $visible = array('Values-id', 'Countries-flag-id', 'Currencies-Charts', 'rate-excahnges-currencies', 'Updated-Gold-Price', 'Sign-Up-User', 'help-user-id', 'timestamps');

    public function TypesID()
    {
        return $this->belongsTo('App\Goldview');
    }

    public function Cryptoid()
    {
        return $this->belongsTo('App\Chart');
    }

    public function Currenciesid()
    {
        return $this->belongsTo('APP\Currency-Exchange');
    }

    public function Usernameid()
    {
        return $this->belongsTo('App\Owner');
    }

    public function Appsid()
    {
        return $this->hasOne('App\Fields');
    }

}