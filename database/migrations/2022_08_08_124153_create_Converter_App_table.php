<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConverterAppTable extends Migration {

	public function up()
	{
		Schema::create('Converter_App', function(Blueprint $table) {
			$table->increments('Currences-id', true)->primary();
			$table->string('countries_symbol_name', true);
			$table->mediumText('countries_symbol_flags', true);
			$table->integer('currencies_rate_value')->unique()->unsigned();
			$table->timestampsTz('timestamps', true);
		});
	}

	public function down()
	{
		Schema::drop('Converter_App');
	}
}