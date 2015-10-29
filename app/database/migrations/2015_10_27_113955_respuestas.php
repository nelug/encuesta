<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Respuestas extends Migration {

	public function up()
	{
		Schema::create('respuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('sexo')->nullable();
			$table->string('edad')->nullable();
			$table->string('p1')->nullable();
			$table->string('p1A')->nullable();
			$table->string('p2')->nullable();
			$table->string('p3')->nullable();
			$table->string('p4')->nullable();
			$table->string('p5')->nullable();
			$table->string('p6')->nullable();
			$table->string('p7')->nullable();
			$table->string('p8')->nullable();
			$table->string('p9')->nullable();
			$table->string('p10')->nullable();
			$table->string('p11')->nullable();
			$table->string('p12')->nullable();
			$table->string('p13')->nullable();
			$table->string('p14')->nullable();
			$table->string('p15')->nullable();
			$table->string('p15A')->nullable();
			$table->string('p16')->nullable();
			$table->string('p17')->nullable();
			$table->string('p18')->nullable();
			$table->string('p18A')->nullable();
			$table->string('p19')->nullable();
			$table->string('p20')->nullable();
			$table->string('p21')->nullable();
			$table->string('p22')->nullable();
			$table->string('p23')->nullable();
			$table->string('p24')->nullable();
			$table->string('p25')->nullable();
			$table->string('p26')->nullable();
			$table->string('p27')->nullable();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('respuestas');
	}

}
