<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->string('username', 15)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->tinyInteger('status')->default(1);
            $table->string('remember_token')->nullable();
			$table->timestamps();
			
		});

		$user = new User;
		$user->username = "admin";
		$user->nombre = "Admin";
		$user->apellido = "admin";
		$user->email = "admin@sistema.com";
		$user->password = "admin";
		$user->save();

		$user = new User;
		$user->username = "usuario";
		$user->nombre = "Usuario";
		$user->apellido = "user";
		$user->email = "usuario@sistema.com";
		$user->password = "usuario";
		$user->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
