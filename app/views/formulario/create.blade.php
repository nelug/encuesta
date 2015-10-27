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
        <input type="text" name="name" v-model="formulario.p2" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>2. ¿Cada cuánto tiempo visita Esquipulas?:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p3 = '2 veces al año'" name="p3" type="radio">2 veces al año</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = '1 año'" name="p3" type="radio">1 año</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = '2 años'" name="p3" type="radio">2 años</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = '3 años'" name="p3" type="radio">3 años</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p3 = 'mas'" name="p3" type="radio">mas</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>3. ¿Por qué motivo visita a Esquipulas?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'Visita Religiosa'" name="p4" type="radio">Visita Religiosa</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'Trabajo'" name="p4" type="radio">Trabajo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'Recreación'" name="p4" type="radio">Recreación</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p4 = 'Otros motivos'" name="p4" type="radio">Otros motivos</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>4. ¿Aparte del motivo Religioso de su estancia usted visitará otro lugar de entretenimiento?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p5 = 'Si'" name="p5" type="radio">Si</label>
           &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
           <div v-show="(formulario.p5 == 'Si')">
              5. Cual:<input type="text" v-model="formulario.p6" class="form-control">
           </div>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p5 = 'No'" name="p5" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p5 == 'No')">
    <div class="col-md-12"> <h3>6. A qué se debe que usted no visite otro lugar:</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p7" class="form-control">
    </div>
</div>

<div class="row" v-show="(formulario.p5 == 'No')">
    <div class="col-md-12"> <h3>7. ¿Le interesaría a usted conocer en su visita otros lugares atractivos de Esquipulas?</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p8 = 'Si'" name="p8" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p8 = 'No'" name="p8" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>8. Adicionalmente de Esquipulas conoce atractivos turísticos en la región del trifinio fronterizos con este lugar, del lado de Honduras y El Salvador.</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p9 = 'Si'" name="p9" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p9 = 'No'" name="p9" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p9 == 'Si')">
    <div class="col-md-12"> <h3>9. Que sitios conoce:</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p10" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>10. Ha visto o escuchado alguna promoción de estos sitios turísticos que se encuentran cerca de Esquipulas:</h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p11 = 'Si'" name="p11" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p11 = 'No'" name="p11" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>11. Usted viene: </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p12 = 'Solo'" name="p12" type="radio">Solo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p12 = 'Excursión'" name="p12" type="radio">Excursión</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p12 = 'En Familia'" name="p12" type="radio">En Familia</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>12. ¿Qué tipo de transporte utiliza para venir a Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p13 = 'Carro propio o familiar'" name="p13" type="radio">Carro propio o familiar</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p13 = 'Contratan Bus'" name="p13" type="radio">Contratan Bus</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p13 = 'transporte público'" name="p13" type="radio">transporte público</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>13. ¿Le han ofrecido alguna vez un paquete que incluya alojamiento, alimentación o visitas de atractivos en Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p14 = 'Si'" name="p14" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p14 = 'No'" name="p14" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p14 == 'Si')">
    <div class="col-md-12"> <h3>14. ¿Quién se lo ofreció?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p15" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>15. ¿Cuántos días viene a Esquipulas? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p16 = '1 dia'" name="p16" type="radio">1 dia</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p16 = '2 dias'" name="p16" type="radio">2 dias</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p16 = '3 dias'" name="p16" type="radio">3 dias</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p16 = 'mas de 3 dias'" name="p16" type="radio">mas de 3 dias</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p16 != '1 dia')">
    <div class="col-md-12"> <h3>16. ¿Cómo califica el servicio de hospedaje? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p17 = 'Bueno'" name="p17" type="radio">Bueno</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p17 = 'Regular'" name="p17" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p17 = 'Malo'" name="p17" type="radio">Malo</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p16 != '1 dia')">
    <div class="col-md-12"> <h3>16A ¿Por qué?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p18" class="form-control">
    </div>
</div>

<div class="row" v-show="(formulario.p16 != '1 dia')">
    <div class="col-md-12"> <h3>17. ¿Usted eligió el Hospedaje o la empresa hotelera lo busco y le vendió el servicio de hospedaje?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p18 = 'Yo'" name="p18" type="radio">Yo</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p18 = 'Ellos'" name="p18" type="radio">Ellos</label>
        </div>
    </div>
</div>

<div class="row"  v-show="(formulario.p16 != '1 dia')">
    <div class="col-md-12"> <h3>18. ¿Hizo reservaciones antes de realizar su viaje? </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p19 = 'Si'" name="p19" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p19 = 'No'" name="p19" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>19. ¿Cómo califica la alimentación que le han servido?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p20 = 'Buena'" name="p20" type="radio">Buena</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p20 = 'Regular'" name="p20" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p20 = 'Mala'" name="p20" type="radio">Mala</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p14 == 'Si')">
    <div class="col-md-12"> <h3>19A ¿Por qué?</h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p21" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>20. ¿Dónde compro sus alimentos?   </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Ventas Callejeras'" name="p22" type="radio">Ventas Callejeras</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Comedor del mercado'" name="p22" type="radio">Comedor del mercado</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p22 = 'Restaurante'" name="p22" type="radio">Restaurante</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>21. Donde prefiere comprar sus artesanías   </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p23 = 'Mercado de artesanías'" name="p23" type="radio">Mercado de artesanías</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p23 = 'Locales comerciales'" name="p23" type="radio">Locales comerciales</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>22. Le es atractivo el mercado de artesanías  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p24 = 'Si'" name="p24" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p24 = 'No'" name="p24" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>23. ¿Cómo le parecen los precios de sus artesanías?  </h3> </div>
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
    <div class="col-md-12"> <h3>24. ¿Utilizó Taximoto como medio de transporte en la ciudad?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p26 = 'Si'" name="p26" type="radio">Si</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p26 = 'No'" name="p26" type="radio">No</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p26 == 'Si')">
    <div class="col-md-12"> <h3>25. ¿Cómo califica el servicio?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p27 = 'Bueno'" name="p27" type="radio">Bueno</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p27 = 'Regular'" name="p27" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p27 = 'Malo'" name="p27" type="radio">Malo</label>
        </div>
    </div>
</div>

<div class="row" v-show="(formulario.p26 == 'Si')">
    <div class="col-md-12"> <h3>26. ¿considera que el precio por el servicio que recibió fue lo justo?  </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p28 = 'Bajos'" name="p28" type="radio">Bajos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p28 = 'Justos'" name="p28" type="radio">Justos</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p28 = 'Altos'" name="p28" type="radio">Altos</label>
        </div>
    </div>
</div>

<div class="row" >
    <div class="col-md-12"> <h3>27. ¿Cómo le pareció la limpieza de la ciudad   </h3> </div>
    <div class="col-md-12">
        <div class="radio">
          <label><input v-on="click: formulario.p29 = 'Buena'" name="p29" type="radio">Buena</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p29 = 'Regular'" name="p29" type="radio">Regular</label>
        </div>
        <div class="radio">
          <label><input v-on="click: formulario.p29 = 'Deficiente'" name="p29" type="radio">Deficiente</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12"> <h3>29. Qué aspecto considera que se debe mejorar en la ciudad </h3> </div>
    <div class="col-md-12">
        <input type="text" name="name" v-model="formulario.p30" class="form-control">
    </div>
</div>


<pre>
    @{{ formulario | json }}
</pre>
