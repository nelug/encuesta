var app = new Vue({

    el: 'body',

    data: {
        formulario: {
            sexo:"",
            edad:" ",
            p1:  "", p2:  "", p3:  "", p4:  "", p5:  "", p6:  "",
            p7:  "", p8:  "", p9:  "", p10: "", p11: "", p12: "",
            p13: "", p14: "", p15: "", p16: "", p17: "", p18: "",
            p19: "", p20: "", p21: "", p22: "", p23: "", p24: "",
            p25: "", p26: "", p27: "", p28: "", p29: "", p30: "",
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
                    alert('formulario ingresado con exito..!');
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
