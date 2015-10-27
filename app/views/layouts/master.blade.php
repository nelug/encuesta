<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Encuesta</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Encuestas</a>
                </div>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Leonel Madrid <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/logout"><i class="fa fa-fw fa-power-off"></i>Cerrar Session</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="/"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                        </li>
                        <li>
                            <a href="#" v-on="click:verFormulario()"><i class="fa fa-fw fa-cube"></i> Encuesta</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Graficas</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" style="min-height: 800px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li class="active">
                                    Encuestas
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i></h3>
                                </div>
                                <div class="panel-body contenedorPrincipal">
                                    <div style="text-align: center;r">
                                        <h1>APP ENCUESTAS ONLINE</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/vue.js"></script>
        <script src="js/vue-next.js"></script>
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
        <script src="js/v-funciones.js"></script>
    </body>
</html>