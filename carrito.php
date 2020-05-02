<?php
require_once __DIR__ . "/vendor/autoload.php";
$MDB = "proyecto";
$subtotal = "0";
$iva = "0";
$total = "0";
$conexionMongo = (new MongoDB\Client)->$MDB ->carrito;
$coleccion = $conexionMongo->find([]);
foreach ($coleccion as $carga) {
    if ($carga->posicion) {
        @$subtotal = $subtotal + ($carga->precio);
    }
}
$iva = (16 / 100) * $subtotal;
$total = $subtotal + $iva;
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <link rel="shortcut icon" href="imagenes/favicon.png" > 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARRITO</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js" ></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <style>
            .container{padding: 50px;}
            input[type="number"]{width: 20%;}
        </style>

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
                    <li><a href="carrito.php" class="waves-effect "><img class="activator" src="/imagenes/carrito.png" width="40" height="40"></a></li>
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
                            <a class="btn-floating waves-effect waves-light red tooltipped" data-position="bottom" data-tooltip="Empty cart" style="margin-right: 17px;"><i class="zmdi zmdi-delete"></i></a>
                            <a class="btn-floating waves-effect waves-light green tooltipped" data-position="bottom" data-tooltip="Confirm purchase"><i class="zmdi zmdi-money"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1>Mi carrito</h1>
            <table class="table" >
                <thead>
                    <tr>
                        <th>categoria</th>
                        <th>titulo</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB ->carrito;
                    $coleccion = $conexionMongo->find([]);

                    foreach ($coleccion as $carga) {
                        if ($carga->posicion == "1") {
                            $articulos = 1;
                        }
                    };

                    if (@$articulos > 0) {
                        //get cart items from session

                        $conexionMongo = (new MongoDB\Client)->$MDB ->carrito;
                        $coleccion = $conexionMongo->find([]);
                        foreach ($coleccion as $carga) {
                            ?>
                            <tr>
                                <td><?php echo $carga->categoria ?></td>
                                <td><?php echo $carga->titulo ?></td>
                                <td><?php echo '$' . $carga->precio . ' MX'; ?></td>
                                <td><img height='100px'  src='imagenes/productos/<?php echo $carga->imagen; ?>'  ></td>

                                <td>
                                    <a href="/admin/eliminarCarrito.php?action=removeCartItem&id=<?php echo $carga->_id; ?>" class="btn btn-danger" onclick="return confirm('¿Esta seguro?')"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr><td colspan="5"><p>No hay productos agregados</p></td>
                        <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="/index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Salir</a></td>
                        <td colspan="0"></td>
                        
                            <td class="text-center"><strong>Subtotal <?php echo '$' . $subtotal . ' MX'; ?></strong></td>
                            <td class="text-center"><strong>IVA 16% <?php echo '$' . $iva . ' MX'; ?></strong></td>
                            <td class="text-center"><strong>Total <?php echo '$' . $total . ' MX'; ?></strong></td>
                <form action="./aceptarCompra.php" method="post">
                        <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>" />
                        <input type="hidden" name="iva" value="<?php echo $iva; ?>" />
                        <input type="hidden" name="total" value="<?php echo $total; ?>" />
                        <td> <input type="submit" class="btn btn-success btn-block  glyphicon-menu-right" value="Siguiente" /></td>
                    </form>
                
                </tr>
                </tfoot>
            </table>
        </div>

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
                            <li><a href="../php/login.php"><i class=""></i> &nbsp; log/reg</a></li>

                        </ul>	
                    </div>
                    <div class="col s12 tittles footer-copyright">PC-INFORMATICA &copy; 2019</div>
                </div>
            </div>
        </footer>
    </body>
</html>