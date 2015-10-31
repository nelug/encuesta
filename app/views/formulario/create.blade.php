<div class="row">
    <div class="col-md-12"> <h3>Sexo:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.sexo = 'Masculino'" name="sexo" type="radio">Masculino</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.sexo = 'Femenino'" name="sexo" type="radio">Femenino</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>Rango de la edad:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.edad = '15-20'" name="edad" type="radio">15-20</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.edad = '21-30'" name="edad" type="radio">21-30</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.edad = '31-40'" name="edad" type="radio">31-40</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.edad = '21-50'" name="edad" type="radio">21-50</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.edad = '51-mas'" name="edad" type="radio">51-mas</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>1. ¿De qué municipio es originario (a) ?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p1" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>1. ¿A qué Departamento pertenece?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p1A" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>2. ¿Cada cuánto tiempo visita Esquipulas?:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p2 = '2 veces al año'" name="p2" type="radio">2 veces al año</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p2 = '1 año'" name="p2" type="radio">1 año</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p2 = '2 años'" name="p2" type="radio">2 años</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p2 = '3 años'" name="p2" type="radio">3 años</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p2 = 'mas'" name="p2" type="radio">mas</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>3. ¿Por qué motivo visita a Esquipulas?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p3 = 'Visita Religiosa'" name="p3" type="radio">Visita Religiosa</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = 'Trabajo'" name="p3" type="radio">Trabajo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = 'Recreación'" name="p3" type="radio">Recreación</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = 'Otros motivos'" name="p3" type="radio">Otros motivos</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>4. ¿Aparte del motivo Religioso de su estancia usted visitará otro lugar de entretenimiento?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'Si'" name="p4" type="radio">Si</label>
           &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
           <div v-show="(formulario.p4 == 'Si')">
              4A. Cual:<input type="text" v-model="formulario.p4A" class="form-control">
           </div>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'No'" name="p4" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row"  v-show="(formulario.p4 == 'No')">
    <div class="col-md-12"> <h3>5. A qué se debe que usted no visite otro lugar:</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p5" class="form-control">
    </div>
</div>

<div class="row"  v-show="(formulario.p4 == 'No')">
    <div class="col-md-12"> <h3>6. ¿Le interesaría a usted conocer en su visita otros lugares atractivos de Esquipulas?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p6 = 'Si'" name="p6" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p6 = 'No'" name="p6" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>7. Adicionalmente de Esquipulas conoce atractivos turísticos en la región del trifinio fronterizos con este lugar, del lado de Honduras y El Salvador.</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p7 = 'Si'" name="p7" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p7 = 'No'" name="p7" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p7 == 'Si')">
    <div class="col-md-12"> <h3>8. Que sitios conoce:</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p8" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>9. Ha visto o escuchado alguna promoción de estos sitios turísticos que se encuentran cerca de Esquipulas:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p9 = 'Si'" name="p9" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p9 = 'No'" name="p9" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>10. Usted viene: </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p10 = 'Solo'" name="p10" type="radio">Solo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p10 = 'Excursión'" name="p10" type="radio">Excursión</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p10 = 'En Familia'" name="p10" type="radio">En Familia</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>11. ¿Qué tipo de transporte utiliza para venir a Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p11 = 'Carro propio o familiar'" name="p11" type="radio">Carro propio o familiar</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p11 = 'Contratan Bus'" name="p11" type="radio">Contratan Bus</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p11 = 'transporte público'" name="p11" type="radio">transporte público</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>12. ¿Le han ofrecido alguna vez un paquete que incluya alojamiento, alimentación o visitas de atractivos en Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p12 = 'Si'" name="p12" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p12 = 'No'" name="p12" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p12 == 'No')">
    <div class="col-md-12"> <h3>13. ¿Quién se lo ofreció?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p13" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>14. ¿Cuántos días viene a Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p14 = '1 dia'" name="p14" type="radio">1 dia</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p14 = '2 dias'" name="p14" type="radio">2 dias</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p14 = '3 dias'" name="p14" type="radio">3 dias</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p14 = 'mas de 3 dias'" name="p14" type="radio">mas de 3 dias</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p14 != '1 dia')">
    <div class="col-md-12"> <h3>15. ¿Cómo califica el servicio de hospedaje? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p15 = 'Bueno'" name="p15" type="radio">Bueno</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p15 = 'Regular'" name="p15" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p15 = 'Malo'" name="p15" type="radio">Malo</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p15 == 'Malo')">
    <div class="col-md-12"> <h3>15A ¿Por qué?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p15A" class="form-control">
    </div>
</div>

<div class="row" v-show="(formulario.p14 != '1 dia')">
    <div class="col-md-12"> <h3>16. ¿Usted eligió el Hospedaje o la empresa hotelera lo busco y le vendió el servicio de hospedaje?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p16 = 'Yo'" name="p16" type="radio">Yo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p16 = 'Ellos'" name="p16" type="radio">Ellos</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p14 != '1 dia')">
    <div class="col-md-12"> <h3>17. ¿Hizo reservaciones antes de realizar su viaje? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p17 = 'Si'" name="p17" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p17 = 'No'" name="p17" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>18. ¿Cómo califica la alimentación que le han servido?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p18 = 'Buena'" name="p18" type="radio">Buena</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p18 = 'Regular'" name="p18" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p18 = 'Mala'" name="p18" type="radio">Mala</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p18 == 'Mala')">
    <div class="col-md-12"> <h3>18A ¿Por qué?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p18A" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>19. ¿Dónde compro sus alimentos?   </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p19 = 'Ventas Callejeras'" name="p19" type="radio">Ventas Callejeras</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p19 = 'Comedor del mercado'" name="p19" type="radio">Comedor del mercado</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p19 = 'Restaurante'" name="p19" type="radio">Restaurante</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>20. Donde prefiere comprar sus artesanías   </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p20 = 'Mercado de artesanías'" name="p20" type="radio">Mercado de artesanías</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p20 = 'Locales comerciales'" name="p20" type="radio">Locales comerciales</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>21. Le es atractivo el mercado de artesanías  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p21 = 'Si'" name="p21" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p21 = 'No'" name="p21" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>22. ¿Cómo le parecen los precios de sus artesanías?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Bajos'" name="p22" type="radio">Bajos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Justos'" name="p22" type="radio">Justos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Altos'" name="p22" type="radio">Altos</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>23. ¿Utilizó Taximoto como medio de transporte en la ciudad?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p23 = 'Si'" name="p23" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p23 = 'No'" name="p23" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p23 == 'Si')">
    <div class="col-md-12"> <h3>24. ¿Cómo califica el servicio?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p24 = 'Bueno'" name="p24" type="radio">Bueno</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p24 = 'Regular'" name="p24" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p24 = 'Malo'" name="p24" type="radio">Malo</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p23 == 'Si')">
    <div class="col-md-12"> <h3>25. ¿considera que el precio por el servicio  fue?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p25 = 'Bajos'" name="p25" type="radio">Bajos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p25 = 'Justos'" name="p25" type="radio">Justos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p25 = 'Altos'" name="p25" type="radio">Altos</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>26. ¿Cómo le pareció la limpieza de la ciudad? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p26 = 'Buena'" name="p26" type="radio">Buena</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p26 = 'Regular'" name="p26" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p26 = 'Deficiente'" name="p26" type="radio">Deficiente</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>27. Qué aspecto considera que se debe mejorar en la ciudad </h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p27" class="form-control">
    </div>
</div>
<br>
<br>

<div class="row">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary btn-lg btn-block" v-on="click: limpiarFormulario()">Limpiar Formulario..</button>
    </div>
  <div class="col-md-6">
      <button type="button" class="btn btn-primary btn-lg btn-block" v-on="click: guardarFormulario()">Guardar Formulario..</button>
  </div>
</div>
