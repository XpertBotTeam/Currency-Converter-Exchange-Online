<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldSilverPlatinumViewTable extends Migration {

	public function up()
	{
		Schema::create('Gold-Silver-Platinum-View', function(Blueprint $table) {
			$table->increments('Types-id', true)->primary();
			$table->mediumText('Currencies_Support')->primary();
			$table->integer('Price');
			$table->string('Weight_discription', true);
			$table->timestampsTz->primary();
		});
	}

	public function down()
	{
		Schema::drop('Gold-Silver-Platinum-View');
	}
}