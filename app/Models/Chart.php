<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model 
{

    protected $table = 'Line_Chart';
    public $timestamps = false;
    protected $fillable = array('Crypto-id', 'Currencies_Marketcap', 'Currencies_Name', 'timestamps');
    protected $visible = array('Crypto-id', 'Currencies_Marketcap', 'Currencies_Name', 'timestamps');

    public function Foreign()
    {
        return $this->belongsTo('Values', 'Crypto-Currency-id');
    }

}