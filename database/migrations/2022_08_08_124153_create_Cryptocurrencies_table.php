<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptocurrenciesTable extends Migration {

	public function up()
	{
		Schema::create('Cryptocurrencies', function(Blueprint $table) {
			$table->increments('Cyrpto-Currency-id', true)->primary();
			$table->integer('Values')->unsigned();
			$table->timestampsTz('timestamps', true);
		});
	}

	public function down()
	{
		Schema::drop('Cryptocurrencies');
	}
}