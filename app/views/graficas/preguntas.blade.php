<div class="table-responsive" v-show="capa == 1">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No:</th>
                <th>Pregunta</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-repeat="dt: preguntasTable">
                <td>@{{dt.no}}.</td>
                <td>@{{dt.pregunta}}</td>
                <td>
                    {{-- <a href="#"> <i class="fa fa-search" v-on="click: verGraficaPregunta(dt.no, dt.pregunta, dt.info)"></i></a> --}}
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div v-show="capa == 2" id="capaDos">

</div>

<script type="text/javascript">
    app.preguntasData = {{ json_encode($data)}};
    app.capa = 1;
</script>
