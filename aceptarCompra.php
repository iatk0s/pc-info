<?php
session_start();
require_once __DIR__ . "/vendor/autoload.php";
$subtotal = $_POST['subtotal'];
$iva = $_POST['iva'];
$total = $_POST['total'];
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







        <section class="full new-prod">
            <div class="container">
                <div class="row">
                    <h4 class="center-align tittles">CONFIRMAR COMPRA</h4>
                    <center>
                        <h4 class="center-align tittles">ARTICULOS:</h4>

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">CATEGORIA</th>
                                    <th scope="col">TITULO</th>
                                    <th scope="col">DESCRIPCION</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $conexionMongo = (new MongoDB\Client)->$MDB->carrito;
                                    $coleccion = $conexionMongo->find([]);
                                    foreach ($coleccion as $carga) {
                                        if ($carga->posicion == "1") {
                                            echo "<th>" . $carga->categoria . "</th>";
                                            echo "<td>" . $carga->titulo . "</td>";
                                            echo "<td>" . $carga->descripcion . "</td>";
                                            echo "<td> $ " . $carga->precio . " Mxn</td></tr>";
                                        }
                                    };
                                    ?>

                            </tbody>
                        </table>
                        <h5 class="center-align tittles">SUBTOTAL:</h5>
                        <?php echo "<h6 class='center-align tittles'> $ " . $subtotal . " Mxn</h6>"; ?>
                        <h7 class="center-align tittles">IVA:</h7>
                        <?php echo "<h6 class='center-align tittles'> $ " . $iva . " Mxn</h6>"; ?>
                        <h4 class="center-align tittles">TOTAL:</h4>
                        <?php echo "<h6 class='center-align tittles'> $ " . $total . " Mxn</h6>"; ?>


                        <tr>
                            <td><a href="./index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Salir</a></td>
                            <td colspan="0"></td>


                        <form action="./confirmacion.php" method="post">
                            <input type="email" required class="form-control" name="correo"  placeholder="Email" /><br/><br/>
                            <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>" />
                            <input type="hidden" name="iva" value="<?php echo $iva; ?>" />
                            <input type="hidden" name="total" value="<?php echo $total; ?>" />
                            <td> <input type="submit" class="btn btn-success btn-block  glyphicon-menu-right" value="Siguiente" /></td>
                        </form>
                        </tr>



                    </center>

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