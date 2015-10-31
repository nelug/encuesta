var app = new Vue({

    el: 'body',

    data: {
        capa: 1,

        formulario: {
            sexo:"",
            edad:" ",
            p1:  "", p1A: "", p2:  "", p3:  "", p4:  "", p4A:  "", p5:  "",
            p6:  "", p7:  "", p8:  "", p9:  "", p10: "", p11: "",
            p12: "", p13: "", p14: "", p15: "", p15A:"", p16: "",
            p17: "", p18: "", p18A:"", p19: "", p20: "", p21: "",
            p22: "", p23: "", p24: "", p25: "", p26: "", p27: "",
        },

        dataGraficaUsuario:[],

        preguntasTable:[],

        preguntasData: [],

        grafica:[{
            titulo:'',
            info: false,
        }],

        graficaData: [],

        graficaTabla: [],

    },

    methods: {
        verFormulario: function() {
            $.get( "formulario/create", function( data ) {
                $('.contenedorPrincipal').html(data);
                app.$nextTick(function() {
                    app.$compile(app.$el);
                });
            });
        },

        limpiarFormulario: function() {
            this.sexo ="";
            this.edad ="";
            this.p1 =  ""; this.p1A = ""; this.p2 =  ""; this.p3 =  ""; this.p4 =  "";
            this.p4A =  ""; this.p5 =  "";
            this.p6 =  ""; this.p7 =  ""; this.p8 =  ""; this.p9 =  ""; this.p10 = ""; this.p11 = "";
            this.p12 = ""; this.p13 = ""; this.p14 = ""; this.p15 = ""; this.p15A =""; this.p16 = "";
            this.p17 = ""; this.p18 = ""; this.p18A =""; this.p19 = ""; this.p20 = ""; this.p21 = "";
            this.p22 = ""; this.p23 = ""; this.p24 = ""; this.p25 = ""; this.p26 = ""; this.p27 = "";
            this.verFormulario();
            alert('Formulario limpiado con exito...!');
        },

        guardarFormulario: function() {
            $.ajax({
                url: "formulario/guardar",
                type: "POST",
                data: {respuestas: app.formulario},
            }).done(function(data) {

                if (data == 'success') {
                    alert('Encuesta almacenada exitosamente...!');
                    window.location.reload();
                    return 0;
                }

                alert(data);
            });
        },

        verGraficaPorUsuario: function()
        {
            $.get( "graficas/usuario", function( data ) {
                $('.contenedorPrincipal').html(data);

                Morris.Donut({
                    element: 'encuestasPorUsuario',
                    data: app.dataGraficaUsuario,
                    resize: true
                });

            });
        },

        verGraficaPorPregunta: function()
        {
            app.capa = 1;
            $.get( "graficas/preguntas", function( data ) {
                $('.contenedorPrincipal').html(data);
                app.preguntasTable = preguntasArray;
                app_compile();
            });
        },

        verGraficaPregunta: function(no, pregunta, info)
        {
            app.grafica.titulo = no + ': ' + pregunta;
            app.graficaData = app.preguntasData[no];
            app.grafica.info = info;

            if (info == true) {
                graficaTabla = app.preguntasData['p4i'];
            }

            $.ajax({
                url: "graficas/grafica",
                type: "GET",
            }).done(function(data) {
                app.capa = 2;
                $('#capaDos').html(data);
                app_compile();
            });
        }
   }

});


function app_compile() {
    app.$nextTick(function() {
        app.$compile(app.$el);
    });
}


var preguntasArray = [
    {
        no: "sexo",
        pregunta: "Sexo",
        info: false,
    },{
        no: "edad",
        pregunta: "Rango de la edad:",
        info: false,
    },{
        no: "1",
        pregunta: "¿De qué municipio es originario (a)",
        info: false,
    },{
        no: "1A",
        pregunta: "1. ¿A qué Departamento pertenece?",
        info: false,
    },{
        no: "2",
        pregunta: "¿Cada cuánto tiempo visita Esquipulas?",
        info: false,
    },{
        no: "3",
        pregunta: "¿Por qué motivo visita a Esquipulas?",
        info: false,
    },{
        no: "4",
        pregunta: "¿Aparte del motivo Religioso de su estancia usted visitará otro lugar de entretenimiento?",
        info: false,
    },{
        no: "4A",
        pregunta: "Cual?",
        info: true,
    },{
        no: "5",
        pregunta: "A qué se debe que usted no visite otro lugar",
        info: true,
    },{
        no: "6",
        pregunta: "¿Le interesaría a usted conocer en su visita otros lugares atractivos de Esquipulas?",
        info: false,
    },{
        no: "7",
        pregunta: "Adicionalmente de Esquipulas conoce atractivos turísticos en la región del trifinio fronterizos con este lugar, del lado de Honduras y El Salvador",
        info: false,
    },{
        no: "8",
        pregunta: "Que sitios conoce",
        info: true,
    },{
        no: "9",
        pregunta: "Ha visto o escuchado alguna promoción de estos sitios turísticos que se encuentran cerca de Esquipulas",
        info: false,
    },{
        no: "10",
        pregunta: "Usted viene",
        info: false,
    },{
        no: "11",
        pregunta: "¿Qué tipo de transporte utiliza para venir a Esquipulas?",
        info: false,
    },{
        no: "12",
        pregunta: "¿Le han ofrecido alguna vez un paquete que incluya alojamiento, alimentación o visitas de atractivos en Esquipulas?",
        info: false,
    },{
        no: "13",
        pregunta: "¿Quién se lo ofreció?",
        info: true,
    },{
        no: "14",
        pregunta: "¿Cuántos días viene a Esquipulas?",
        info: false,
    },{
        no: "15",
        pregunta: "¿Cómo califica el servicio de hospedaje?",
        info: false,
    },{
        no: "15A",
        pregunta: "¿Por qué?",
        info: true,
    },{
        no: "16",
        pregunta: "¿Usted eligió el Hospedaje o la empresa hotelera lo busco y le vendió el servicio de hospedaje?",
        info: false,
    },{
        no: "17",
        pregunta: "¿Hizo reservaciones antes de realizar su viaje? ",
        info: false,
    },{
        no: "18",
        pregunta: "¿Cómo califica la alimentación que le han servido?",
        info: false,
    },{
        no: "18A",
        pregunta: "¿Por qué?",
        info: true,
    },{
        no: "19",
        pregunta: "¿Dónde compro sus alimentos?",
        info: false,
    },{
        no: "20",
        pregunta: "Donde prefiere comprar sus artesanías",
        info: false,
    },{
        no: "21",
        pregunta: "Le es atractivo el mercado de artesanías",
        info: false,
    },{
        no: "22",
        pregunta: "¿Cómo le parecen los precios de sus artesanías?",
        info: false,
    },{
        no: "23",
        pregunta: "¿Utilizó Taximoto como medio de transporte en la ciudad?",
        info: false,
    },{
        no: "24",
        pregunta: "¿Cómo califica el servicio?",
        info: false,
    },{
        no: "25",
        pregunta: "¿considera que el precio por el servicio que recibió fue lo justo?",
        info: false,
    },{
        no: "26",
        pregunta: "¿Cómo le pareció la limpieza de la ciudad?",
        info: false,
    },{
        no: "27",
        pregunta: "Qué aspecto considera que se debe mejorar en la ciudad",
        info: true,
    },
];
