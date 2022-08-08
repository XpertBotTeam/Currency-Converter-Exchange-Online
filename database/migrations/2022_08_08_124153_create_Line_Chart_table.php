<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineChartTable extends Migration {

	public function up()
	{
		Schema::create('Line_Chart', function(Blueprint $table) {
			$table->increments('Crypto-id', true)->primary();
			$table->integer('Currencies_Marketcap')->unsigned();
			$table->string('Currencies_Name', true)->primary();
			$table->timestampsTz('timestamps', true);
		});
	}

	public function down()
	{
		Schema::drop('Line_Chart');
	}
}