<div class="col-lg-12">
    <div class="panel panel-green">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> @{{ grafica.titulo }}</h3>
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="graficaPorPregunta"></div>
            </div>
        </div>
    </div>
</div>

    <div class="table-responsive" v-show="grafica.info">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>RESPUESTAS</th>
                </tr>
            </thead>
            <tbody>
                <tr v-repeat="dt: graficaTabla">
                    <td>@{{dt.respuesta}}</td>
                </tr>
            </tbody>
        </table>
    </div>


<script type="text/javascript">
$(function () {
        datosActuales =   [
  {
    "name": "No",
    "y": 5,
    "sliced": "true",
    "selected": "true"
  },
  {
    "name": "Si",
    "y": 10,
    "sliced": "true",
    "selected": "true"
  }
];
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });

        $('#placeholderChart').highcharts({
            chart: {
                type: 'pie',
                marginLeft: 75,
                marginRight: 25,
                options3d: {
                    enabled: true,
                    alpha: 5,
                    beta: 25,
                    depth: 90
                }
            },
            title: {
                text: app.grafica.titulo
            },
            plotOptions: {
               pie: {
                   allowPointSelect: true,
                   cursor: 'pointer',
                   dataLabels: {
                       enabled: true,
                       format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                       style: {
                           color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                       }
                   }
               }
           },

            credits: {
                text: ""
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> Total<br/>'
            },

            yAxis: {
                title: {
                    enabled: false,
                    text: ''
                },
                labels: {
                    formatter: function() {
                       return Highcharts.numberFormat(this.value, 2);
                    }
                }
            },
            series: [{
                name: 'app.grafica.titulo',
                colorByPoint: true,
                data: datosActuales,
            }]
        });
});
</script>
