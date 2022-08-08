<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration {

	public function up()
	{
		Schema::create('Contact', function(Blueprint $table) {
			$table->increments('Apps-id', true)->primary();
			$table->string('Host-Name-App')->nullable();
			$table->timestampsTz('timestamps', true);
		});
	}

	public function down()
	{
		Schema::drop('Contact');
	}
}