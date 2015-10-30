<?php

class GraficaController extends \BaseController {

    public function usuario()
    {
        $data = Respuesta::select(
                DB::raw('users.apellido as label'),
                DB::raw('count(*) as value'))
            ->join('users', 'user_id', '=', 'users.id')
            ->groupBy('user_id')
            ->get();


        return View::make('graficas.usuario', compact('data'));
    }

    public function preguntas()
    {
        $data = array();

        $data['sexo']  = $this->consulta('sexo');
        $data['edad']  = $this->consulta('edad');
        $data['p1']    = $this->consulta('p1');
        $data['p1A']   = $this->consulta('p1A');
        $data['p2']    = $this->consulta('p2');
        $data['p3']    = $this->consulta('p3');
        $data['p4']    = $this->consulta('p4');
        $data['p4A']   = $this->consulta('p4A');
        $data['p4Ai']  = $this->consultaInformativa('p4A');
        $data['p5']    = $this->consulta('p5');
        $data['p5i']   = $this->consultaInformativa('p5');
        $data['p6']    = $this->consulta('p6');
        $data['p7']    = $this->consulta('p7');
        $data['p8']    = $this->consulta('p8');
        $data['p8i']   = $this->consultaInformativa('p8');
        $data['p9']    = $this->consulta('p9');
        $data['p10']   = $this->consulta('p10');
        $data['p11']   = $this->consulta('p11');
        $data['p12']   = $this->consulta('p12');
        $data['p13']   = $this->consulta('p13');
        $data['p13i']  = $this->consultaInformativa('p13');
        $data['p14']   = $this->consulta('p14');
        $data['p15']   = $this->consulta('p15');
        $data['p15A']  = $this->consulta('p15A');
        $data['p15Ai'] = $this->consultaInformativa('p15A');
        $data['p16']   = $this->consulta('p16');
        $data['p17']   = $this->consulta('p17');
        $data['p18']   = $this->consulta('p18');
        $data['p18A']  = $this->consulta('p18A');
        $data['p18Ai'] = $this->consultaInformativa('p18A');
        $data['p19']   = $this->consulta('p19');
        $data['p20']   = $this->consulta('p20');
        $data['p21']   = $this->consulta('p21');
        $data['p22']   = $this->consulta('p22');
        $data['p23']   = $this->consulta('p23');
        $data['p24']   = $this->consulta('p24');
        $data['p25']   = $this->consulta('p25');
        $data['p26']   = $this->consulta('p26');
        $data['p27']   = $this->consulta('p27');
        $data['p27i']  = $this->consultaInformativa('p27');

        return View::make('graficas.preguntas', compact('data'));
    }
    public function grafica()
    {
        return View::make('graficas.graficaTemplate')->render();
    }

    public function consulta($columna)
    {
        $data = Respuesta::select(
            DB::raw("{$columna} as name"),
            DB::raw("count(*) as y"),
            DB::raw("('true') as sliced"),
            DB::raw("('true') as selected"))
        ->groupBy("{$columna}")
        ->get();

        return $data;
    }

    public function consultaInformativa($columna)
    {
        $data = Respuesta::select(
            DB::raw("{$columna} as respuesta"))
        ->get();

        return $data;
    }

}
