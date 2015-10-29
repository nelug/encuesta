<?php

class FormularioController extends \BaseController {

	public function guardar()
	{
		$respuesta = Input::get('respuestas');

		$table = new Respuesta;
		$table->user_id =  Auth::user()->id;
		$table->sexo = $respuesta['sexo'];
		$table->edad = $respuesta['edad'];
		$table->p1 = $respuesta['p1'];
		$table->p1A = $respuesta['p1A'];
		$table->p2 = $respuesta['p2'];
		$table->p3 = $respuesta['p3'];
		$table->p4 = $respuesta['p4'];
		$table->p5 = $respuesta['p5'];
		$table->p6 = $respuesta['p6'];
		$table->p7 = $respuesta['p7'];
		$table->p8 = $respuesta['p8'];
		$table->p9 = $respuesta['p9'];
		$table->p10 = $respuesta['p10'];
		$table->p11 = $respuesta['p11'];
		$table->p12 = $respuesta['p12'];
		$table->p13 = $respuesta['p13'];
		$table->p14 = $respuesta['p14'];
		$table->p15 = $respuesta['p15'];
		$table->p15A = $respuesta['p15A'];
		$table->p16 = $respuesta['p16'];
		$table->p17 = $respuesta['p17'];
		$table->p18 = $respuesta['p18'];
		$table->p18A = $respuesta['p18A'];
		$table->p19 = $respuesta['p19'];
		$table->p20 = $respuesta['p20'];
		$table->p21 = $respuesta['p21'];
		$table->p22 = $respuesta['p22'];
		$table->p23 = $respuesta['p23'];
		$table->p24 = $respuesta['p24'];
		$table->p25 = $respuesta['p25'];
		$table->p26 = $respuesta['p26'];
		$table->p27 = $respuesta['p27'];

		if($table->save())
			return 'success';

		return 'error refresque la pagina y intente de nuevo';
	}
}
