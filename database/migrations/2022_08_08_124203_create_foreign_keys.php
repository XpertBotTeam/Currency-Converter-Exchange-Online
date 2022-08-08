<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Cryptocurrencies', function(Blueprint $table) {
			$table->foreign('Values')->references('Currencies_Marketcap')->on('Line_Chart')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Converter_App', function(Blueprint $table) {
			$table->foreign('currencies_rate_value')->references('rate-excahnges-currencies')->on('Main-Data')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Main-Data', function(Blueprint $table) {
			$table->foreign('Currencies-Charts')->references('Currencies_Marketcap')->on('Line_Chart')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Cryptocurrencies', function(Blueprint $table) {
			$table->dropForeign('Cryptocurrencies_Values_foreign');
		});
		Schema::table('Converter_App', function(Blueprint $table) {
			$table->dropForeign('Converter_App_currencies_rate_value_foreign');
		});
		Schema::table('Main-Data', function(Blueprint $table) {
			$table->dropForeign('Main-Data_Currencies-Charts_foreign');
		});
	}
}