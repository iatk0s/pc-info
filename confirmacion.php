<?php
session_start();
$MDB = "proyecto";
require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->$MDB->carrito;
$coleccion = $collection->find([]);

$collection->drop();

$iva = $_POST['iva'];
$total = $_POST['total'];
$correo = $_POST['correo'];

    $asunto = "Confirmacion de compra PC-Informatica";
    $mensage = "Gracias por compra con nosotros! <br><br> por favor pase a pagar a la cuanta:<br>123465789 <br> la cantidad de: $".$total." mxn <br>iva 16%: $" . $iva;
    @mail($correo,$asunto,$mensage);
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
                    <li><a href="carrito.php" class="waves-effect "><img class="activator" src="./imagenes/carrito.png" width="40" height="40"></a></li>
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
                    <h4 class="center-align tittles">Gracias por comprar nuestros productos!</h4>
                    <br><br>
                    <h6 class="center-align tittles">Por favor revise su correo electronico!</h6>
                    <center>
                        <img height='200px'  src='imagenes/gracias.png'>
                        <h5 class="center-align tittles">Seguir comprando...</h5>
                        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Salir...</a>
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
                            Aceptamos pagos con tarjetas de credito y debito.
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