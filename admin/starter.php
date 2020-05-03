<?php
require_once __DIR__ . "../vendor/autoload.php";
include('session.php');
$MDB = "proyecto";
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PC-INFORMATICA | Aministrador</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>


    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">



            <header class="main-header">

                <a href="starter.php" class="logo">
                    <span class="logo-mini"><b>pc-</b>I</span>
                    <span class="logo-lg"><b></b>Pc-Informatica</span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">navegación</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">4 mensages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">todos los mensages</a></li>
                                </ul>
                            </li>

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">
                                        <tbody>
                                            <?php echo $login_session; ?>
                                        </tbody>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                    <tbody>
                                        <?php echo $login_session; ?>
                                    </tbody>
                                    <small>ADMINISTRADOR</small>
                                    </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="./logout.php" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><tbody>
                                <?php echo $login_session; ?>
                            </tbody></p>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">menú</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="active"><a href="starter.php"><i class="fa fa-link"></i> <span>principal</span></a></li>
                        <li><a href="./catalogo.php"><i class="fa fa-link"></i> <span>catalogo</span></a></li>
                        <li><a href="./servicios.php"><i class="fa fa-link"></i> <span>Servicios</span></a></li>
                        <li><a href="./usuarios.php"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
                        <li><a href="./computadoras.php"><i class="fa fa-link"></i> <span>Computadoras</span></a></li>
                        <li><a href="./impresoras.php"><i class="fa fa-link"></i> <span>Impresoras</span></a></li>
                        <li><a href="./accesorios.php"><i class="fa fa-link"></i> <span>Accesorios</span></a></li>
                        <li><a href="./telefonos.php"><i class="fa fa-link"></i> <span>Telefonos</span></a></li>
                        <li><a href="./software.php"><i class="fa fa-link"></i> <span>Software</span></a></li>
                        <li><a href="./hardware.php"><i class="fa fa-link"></i> <span>Hardware</span></a></li>
                        <li><a href="./videojuegos.php"><i class="fa fa-link"></i> <span>Videojuegos</span></a></li>
                        <li><a href="./pantallas.php"><i class="fa fa-link"></i> <span>Pantallas</span></a></li>
                        <li><a href="./consumibles.php"><i class="fa fa-link"></i> <span>Consumibles</span></a></li>



                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Administrador
                        <small>- Opciones Administrativas</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> nivel</a></li>
                        <li class="active">Principal</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">




                    <center><p> <h2>Carrucel Principal</h2></p></center>

                    <center>

                        <table border="2" align="center">
                            <thead>
                                <tr>
                                    <th>posicion</th>
                                    <th align="center">imagen </th>
                                    <th colspan="2" align="center">Operaciones</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $conexionMongo = (new MongoDB\Client)->$MDB->sliderPrin;
                                $coleccion = $conexionMongo->find([]);
                                foreach ($coleccion as $carga) {
                                    if ($carga->posicion) {
                                        echo "<tr><td>" . $carga->posicion . "</td>";
                                        echo "<td><img height='150px' src='../" . $carga->ruta . $carga->nombre . "'></td>";
                                        echo "<td><a href='editSliderPrin.php?id=" . $carga->_id . "' class='btn btn-primary'>Editar</a></td></tr>";
                                    }
                                };
                                ?>
                            </tbody>
                        </table>
                    </center>




                    <!--   ................................................ -->

                    <center><p> <h2>Descripcion principal</h2></p></center>

                    <center>

                        <table border="1" align="center">
                            <thead>
                                <tr>
                                    <th>categoria</th>
                                    <th>descripción </th>
                                    <th colspan="2" align="center">Operaciones</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $c = (new MongoDB\Client)->$MDB->principal;
                                $b = $c->find([]);
                                $id = "";
                                $e = "";
                                foreach ($b as $variableDeCarga) {
                                    if ($variableDeCarga->id == 1) {
                                        echo "<tr><td>" . $variableDeCarga->id . "</td>";
                                        echo "<td>" . $variableDeCarga->descripcion . "</td>";
                                        echo "<td><a href='editPrincipal.php?id=" . $variableDeCarga->_id . "' class='btn btn-primary'>Editar</a></td></tr>";
                                    }
                                };
                                ?>
                            </tbody>
                        </table>
                    </center>


                    <!--   ................................................ -->


                    <center><p> <h2>Carrucel Secundario</h2></p></center>

                    <center>

                        <table border="2" align="center">
                            <thead>
                                <tr>
                                    <th>posicion</th>
                                    <th align="center">imagen</th>
                                    <th colspan="2" align="center">Operaciones</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                $conexionMongo = (new MongoDB\Client)->$MDB->sliderSec;
                                $coleccion = $conexionMongo->find([]);
                                foreach ($coleccion as $carga) {
                                    if ($carga->posicion) {
                                        echo "<tr><td>" . $carga->posicion . "</td>";
                                        echo "<td><img height='150px' src='../" . $carga->ruta . $carga->nombre . "'></td>";
                                        echo "<td><a href='editSliderSec.php?id=" . $carga->_id . "' class='btn btn-primary'>Editar</a></td></tr>";
                                    }
                                };
                                ?>
                            </tbody>
                        </table>
                    </center>

                </section>
                <!-- /.content -->
            </div>


            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="pull-right-container">
                                            <span class="label label-danger pull-right">70%</span>
                                        </span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>