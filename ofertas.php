<?php
session_start();
require_once __DIR__ . "/vendor/autoload.php";
$MDB = "proyecto";
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <link rel="shortcut icon" href="./imagenes/favicon.png" > 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ofertas</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/materialize.min.js" ></script>
        <script src="js/main.js" ></script>
    </head>

    <body>
        <nav class="NavBar full">
            <div class="row">
                <a href="index.php"><div class="tittles NavBar-logo col s12 m3">PC-INFORMATICA</div></a>
                <ul class="NavBar-links col m9">
                    <li><a href="index.php" class="waves-effect">Inicio</a></li>
                    <li><a href="productos.php" class="waves-effect">Productos</a></li>
                    <li><a href="servicios.php" class="waves-effect ">Servicios</a></li>
                    <li><a href="ofertas.php" class="waves-effect ">Ofertas</a></li>
                    <li><a href="contacto.php" class="waves-effect ">Contacto</a></li>
                    <li><a href="ayuda.php" class="waves-effect">Ayuda</a></li>
                    <li><a href="carrito.php" class="waves-effect "><img class="activator" src="imagenes/carrito.png" width="40" height="40"></a></li>	
                </ul>
                <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
            </div>
        </nav>

        <section>
            <div class="container">
                <div class="row">
                    <h4 class="center-align tittles">Ofertas</h4><h5 class="center-align tittles">disponibles</h5>
                    <div class="col s12 m6 l4">

                    </div>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->productos;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $carga) {
                        if ($carga->oferta == "si") {
                            ?>

                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="imagenes/productos/<?php echo $carga->imagen; ?>">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title grey-text text-darken-4">Oferta!</span>
                                        <br>
                                        <span class="card-title activator grey-text text-darken-4"><?php echo $carga->titulo; ?></span>
                                        <br
                                        <span class="card-title grey-text text-darken-4"><?php echo $carga->categoria; ?></span>
                                        <p><?php echo $carga->descripcion; ?></p>
                                        <p>$ <?php echo $carga->precio; ?> mxn</p>
                                        <a btn btn-success href='/admin/agregarCarrito.php?id=<?php echo $carga->_id; ?>' class='btn btn-primary'>Agregar</a>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    };
                    ?>

                </div>
            </div>
        </section>
        <footer class="footer">

            <div class="container">
                <div class="row">
                    <div class="col s12 m6">
                        <h5>Quienes somos?...</h5>
                        <p>
                            Somos una empresa dedicada a la reparación y venta de diversos equipos de computo, todo con los más altos estandares de calidad.
                        </p>
                    </div>
                    <div class="col s12 m6">
                        <h5 class="center-align">Contactanos</h5>
                        <ul class="center-align">
                            <li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Facebook</a></li>
                            <li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; Twitter</a></li>
                            <li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp; Google+</a></li>
                        </ul>	
                    </div>
                    <div class="col s12 tittles footer-copyright">PC-INFORMATICA &copy; 2019</div>
                </div>
            </div>
        </footer>
    </body>
</html>