<?php

namespace APP;

use Illuminate\Database\Eloquent\Model;

class CurrencyExchange extends Model 
{

    protected $table = 'Converter_App';
    public $timestamps = false;
    protected $fillable = array('Currences-id', 'countries_symbol_name', 'countries_symbol_flags', 'currencies_rate_value', 'timestamps');
    protected $visible = array('Currences-id', 'countries_symbol_name', 'countries_symbol_flags', 'currencies_rate_value', 'timestamps');

}