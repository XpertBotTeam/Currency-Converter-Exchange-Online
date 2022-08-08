<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goldview extends Model 
{

    protected $table = 'Gold-Silver-Platinum-View';
    public $timestamps = false;
    protected $fillable = array('Types-id', 'Currencies_Support', 'Price', 'Weight_discription');
    protected $visible = array('Types-id', 'Price', 'Weight_discription', 'timestamps');

    public function SymbolSupport()
    {
        return $this->hasOne('App\Goldview', 'countries_symbol_name');
    }

}