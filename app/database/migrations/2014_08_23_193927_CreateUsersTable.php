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
		$user->apellido = "Sistema";
		$user->email = "admin@sistema.com";
		$user->password = "sistema";
		$user->save();

		$user = new User;
		$user->username = "usuario1";
		$user->nombre = "Usuario";
		$user->apellido = "Sofia";
		$user->email = "usuario@sistema.com";
		$user->password = "sofia";
		$user->save();

		$user = new User;
		$user->username = "usuario2";
		$user->nombre = "Usuario";
		$user->apellido = "Jennifer";
		$user->email = "jennifer@sistema.com";
		$user->password = "jennifer";
		$user->save();

		$user = new User;
		$user->username = "usuario3";
		$user->nombre = "Usuario";
		$user->apellido = "karen";
		$user->email = "karen@sistema.com";
		$user->password = "karen";
		$user->save();

		$user = new User;
		$user->username = "usuario4";
		$user->nombre = "Usuario";
		$user->apellido = "Fatima";
		$user->email = "fatima@sistema.com";
		$user->password = "fatima";
		$user->save();

		$user = new User;
		$user->username = "usuario5";
		$user->nombre = "Usuario";
		$user->apellido = "Nelson";
		$user->email = "nelson@sistema.com";
		$user->password = "nelson";
		$user->save();

		$user = new User;
		$user->username = "usuario6";
		$user->nombre = "Usuario";
		$user->apellido = "Elisabeth";
		$user->email = "elisabeth@sistema.com";
		$user->password = "elisabeth";
		$user->save();

		/*
			_________________
			user: admin
			clave: sistema
			_________________
			user: usuario1
			clave: sofia
			_________________
			user: usuario2
			clave: jennifer
			_________________
			user: usuario3
			clave: karen
			_________________
			user: usuario4
			clave: fatima
			_________________
			user: usuario5
			clave: nelson
			_________________
			user: usuario6
			clave: elisabeth
			_________________
		*/
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
