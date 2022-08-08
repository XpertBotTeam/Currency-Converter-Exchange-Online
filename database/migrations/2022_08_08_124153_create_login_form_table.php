<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginFormTable extends Migration {

	public function up()
	{
		Schema::create('login-form', function(Blueprint $table) {
			$table->increments('Username-id', true)->primary();
			$table->string('Email');
			$table->string('password')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('login-form');
	}
}