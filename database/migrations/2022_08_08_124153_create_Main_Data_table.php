<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainDataTable extends Migration {

	public function up()
	{
		Schema::create('Main-Data', function(Blueprint $table) {
			$table->increments('Values-id', true)->primary();
			$table->mediumText('Countries-flag-id')->nullable();
			$table->integer('Currencies-Charts')->unsigned();
			$table->integer('rate-excahnges-currencies')->unsigned();
			$table->integer('Updated-Gold-Price')->nullable();
			$table->string('Sign-Up-User');
			$table->string('help-user-id', true);
			$table->timestampsTz->primary();
		});
	}

	public function down()
	{
		Schema::drop('Main-Data');
	}
}