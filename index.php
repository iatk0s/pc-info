<?php
session_start();
require_once __DIR__ . "/vendor/autoload.php";
$MDB = "proyecto";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PC-INFORMATICA</title>
        <link rel="shortcut icon" href="imagenes/favicon.png" > 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Adrian,Fernando,Veronica" />
        <meta name="copyright" content="Adrian,Fernando,Veronica" />
        <meta name="keywords" content="pc-info, pc reparacion, pc-informatica chilapa, pc ventas"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="flexslider.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/materialize.min.js" ></script>
        <script src="js/main.js" ></script>
        <script src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    touch: true,
                    pauseOnAction: false,
                    pauseOnHover: false,
                });
            });
        </script>
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


        <div class="full ShoppingCart valign-wrapper">
            <div class="container valign">
                <div class="row valign-wrapper">
                    <div class="col s12 m6 valign">
                        <p class="center-align" style="color: #2F9FF3;">
                            <i class="zmdi zmdi-shopping-cart zmdi-hc-5x"></i>		
                        </p>
                        <p class="center-align">
                            <a class="btn-floating waves-effect waves-light red tooltipped" data-position="bottom" data-tooltip="Empty cart" style="margin-right: 20px;"><i class="zmdi zmdi-delete"></i></a>
                            <a class="btn-floating waves-effect waves-light green tooltipped" data-position="bottom" data-tooltip="Confirm purchase"><i class="zmdi zmdi-money"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="flexslider">
            <ul class="slides">
                <li>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->sliderPrin;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $carga) {
                        if ($carga->posicion == "1") {
                            echo "<img width='800px' height='400px' alt='' src='" . $carga->ruta . $carga->nombre . "'>";
                        }
                    };
                    ?>
                    <section class="flex-caption">
                        <div >
                            <p ><em>Equipos de computo</em></p>
                        </div>
                    </section>
                    <section class="flex-caption2">
                        <div class="col s12 m6">
                            <p><small>Los productos más recientes</small></p>
                        </div>
                    </section>
                </li>
                <li>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->sliderPrin;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $carga) {
                        if ($carga->posicion == "2") {
                            echo "<img width='800px' height='400px' alt='' src='" . $carga->ruta . $carga->nombre . "'>";
                        }
                    };
                    ?>
                    <section class="flex-caption">
                        <div class="col s12 m6">
                            <p ><em>Laptops</em></p>
                        </div>
                    </section>
                    <section class="flex-caption2">
                        <div class="col s12 m6">
                            <p ><small>las mejores Laptops</small></p>
                        </div>
                    </section>
                </li>
                <li>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->sliderPrin;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $carga) {
                        if ($carga->posicion == "3") {
                            echo "<img width='800px' height='400px' alt='' src='" . $carga->ruta . $carga->nombre . "'>";
                        }
                    };
                    ?>
                    <section class="flex-caption3">
                        <div class="col s12 m6">
                            <p ><em>Reparación</em></p>
                        </div>
                    </section>
                    <section class="flex-caption4">
                        <div class="col s12 m6">
                            <p class="flow-text" class="tittles right-align"><small>El mejor y eficas servicio</small></p>
                        </div>
                    </section>
                </li>
                <li>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->sliderPrin;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $carga) {
                        if ($carga->posicion == "4") {
                            echo "<img width='800px' height='400px' alt='' src='" . $carga->ruta . $carga->nombre . "'>";
                        }
                    };
                    ?>
                    <section class="flex-caption">
                        <div class="col s12 m6">
                            <p ><em>X-BOX ONE</em></p>
                        </div>
                    </section>
                    <section class="flex-caption2">
                        <div class="col s12 m6">
                            <p class="flow-text" class="tittles right-align"><small>Los juegos son mejores en...</small></p>
                        </div>
                    </section>
                </li>
            </ul>
        </div>

        <header class="full header valign-wrapper">
            <div class="container valign">
                <div class="row">
                    <div class="col s12 m6">
                        <figure>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                    <tbody>
                                        <?php
                                        $conexionMongo = (new MongoDB\Client)->$MDB->sliderSec;
                                        $coleccion = $conexionMongo->find([]);
                                        foreach ($coleccion as $carga) {
                                            if ($carga->posicion == "1") {
                                                echo "<tr><td><img width='800px' height='400px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                            }
                                        };
                                        ?>
                                    </tbody>

                                    </li>
                                    <li>
                                    <tbody>
                                        <?php
                                        $conexionMongo = (new MongoDB\Client)->$MDB->sliderSec;
                                        $coleccion = $conexionMongo->find([]);
                                        foreach ($coleccion as $carga) {
                                            if ($carga->posicion == "2") {
                                                echo "<tr><td><img width='800px' height='400px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                            }
                                        };
                                        ?>
                                    </tbody>
                                    </li>
                                </ul>
                            </div>
                        </figure>
                    </div>


                    <div class="col s12 m6">
                        <h5 class="tittles center-align">PC-INFORMATICA</h5>
                        <p class="flow-text">

                        <tbody><?php
                            $c = (new MongoDB\Client)->$MDB->principal;
                            $b = $c->find([]);
                            foreach ($b as $variableDeCarga) {
                                echo "<tr><td>" . $variableDeCarga->descripcion . "</td></tr>";
                            };
                            ?></tbody>
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <section class="full new-prod">
            <div class="container">
                <div class="row">
                    <h4 class="center-align tittles">Consulta nuestros porductos</h4>
                    <center>
                        <h5 class="center-align tittles">Buscador</h5>
                        <form action="./proceso.php" method="POST" enctype="multipart/form-data">
                            <?php
                            require_once __DIR__ . "/vendor/autoload.php";

                            try {
                                $conn = (new MongoDB\Client);
                                $db = $conn->$MDB;
                                $collection = $db->productos;
                                $query = $collection->find(array(), array("posicion" => 1));
                                ?>
                                <input type="text" required placeholder="Ingresa Articulo" class="form-control center-align" list="datlist" autocomplete="off" id="brgy">
                                <datalist id ="datlist">
                                    <?php
                                    foreach ($query as $result) {
                                        ?>
                                        <option value="<?php echo $result['descripcion']; ?>"></option>

                                        <?php }
                                    ?>
                                </datalist>

                                <?php
                            } catch (MongoConnectionException $e) {
                                // if there was an error, we catch and display the problem here
                                echo $e->getMessage();
                                echo "error at mongoconexe";
                            }
                            ?>
                        </form>
                    </center>

                </div>
            </div>

        </section>


        <section class="full new-prod">
            <h5 class="tittles center-align">CATALOGO</h5>
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>

                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "computadoras") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Computadoras</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "computadoras") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>

                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="computadoras.php">Ver...</a>
                            </div>
                        </div>
                    </div>	
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "impresoras") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Impresoras</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "impresoras") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>

                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="impresoras.php">Ver...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "accesorios") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='./" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Accesorios</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "accesorios") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>

                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="accesorios.php">Ver...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "telefonos") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Telefonos</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "telefonos") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>

                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="telefonos.php">Ver...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "software") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Software</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "software") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="software.php">Ver...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable">
                            <figure class="card-image">
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->imagenesCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "hardware") {
                                            echo "<tr><td><img height='200px' alt='Header' class='responsive-img center-box' src='" . $carga->ruta . $carga->nombre . "'></td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                <figcaption class="card-title">Hardware</figcaption>
                            </figure>
                            <div class="card-content">
                                <p>
                                <tbody>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->descripcionCatalogo;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->categoria == "hardware") {
                                            echo "<tr><td>" . $carga->descripcion . "</td></tr>";
                                        }
                                    };
                                    ?>
                                </tbody>
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="hardware.php">Ver...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="full promo">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 class="tittles center-align">Beneficios</h5>
                    </div>
                    <div class="col s12 m4">
                        <p class="center-align">
                            <i class="zmdi zmdi-card-giftcard zmdi-hc-5x"></i>
                        </p>
                        <p class="center-align flow-text">Grandes Regalos</p>
                        <p>
                            Recibe regalos haciendo compras en la tienda.
                        </p>
                    </div>
                    <div class="col s12 m4">
                        <p class="center-align">
                            <i class="zmdi zmdi-card zmdi-hc-5x"></i>
                        </p>
                        <p class="center-align flow-text">Muchas formas de pago</p>
                        <p>
                            Haceptamos pagos con tarjetas de credito y debito.
                        </p>
                    </div>
                    <div class="col s12 m4">
                        <p class="center-align">
                            <i class="zmdi zmdi-money zmdi-hc-5x"></i>
                        </p>
                        <p class="center-align flow-text">Descuentos Exclusivos</p>
                        <p>
                            Opten los mejores descuentos de la temporada. 
                        </p>
                    </div>
                </div>
            </div>	
        </section>


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6">
                        <h5>Quienes somos?...</h5>
                        <p>
                            Somos una empresa dedicada a la reparacion y venta de diversos equipos de computo, todo con los más altos estandares de calidad.
                        </p>
                    </div>
                    <div class="col s12 m6">
                        <h5 class="center-align">Contactanos!...</h5>
                        <ul class="center-align">
                            <li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Facebook</a></li>
                            <li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; Twitter</a></li>
                            <li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp; Google</a></li>

                        </ul>	
                    </div>
                    <div class="col s12 tittles footer-copyright">PC-INFORMATICA &copy; 2019</div>
                </div>
            </div>
        </footer>
    </body>
</html>