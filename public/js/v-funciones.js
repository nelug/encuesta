var app = new Vue({

    el: 'body',

    data: {
        formulario: {
            sexo:"",
            edad:" ",
            p1:  "", p1A: "", p2:  "", p3:  "", p4:  "", p5:  "",
            p6:  "", p7:  "", p8:  "", p9:  "", p10: "", p11: "",
            p12: "", p13: "", p14: "", p15: "", p15A:"", p16: "",
            p17: "", p18: "", p18A:"", p19: "", p20: "", p21: "",
            p22: "", p23: "", p24: "", p25: "", p26: "", p27: "",
        },
    },

    watch: {
        'formulario': function () {
            app.$compile(app.$el);
            app.formulario.leonel = "leonel";
        }
    },

    directives: {

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
        }
   }

});

function app_compile() {
    app.$nextTick(function() {
        app.$compile(app.$el);
    });
}
