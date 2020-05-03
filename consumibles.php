<?php
session_start();
try {
    require_once '/admin/db.php';

    $collection = $db->productos;

    if (isset($_GET["search_cat"]) && isset($_GET["keyword"])) {
        $keyword = $_GET["keyword"];
        $value = $_GET["search_cat"];
        $query = array($value => array('$regex' => new MongoRegex("/$keyword/i")));
        $cursor = $collection->find($query);
    } else {
        // fetch all product documents
        $cursor = $collection->find([]);
    }

    @$num_docs = count($cursor);
} catch (MongoConnectionException $e) {
    echo $e->getMessage();
} catch (MongoException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">


    <head>
        <link rel="shortcut icon" href="imagenes/favicon.png" > 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consumibles</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="resources/css/style.css">
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
                <h4 class="center-align tittles">Consumibles</h4>


                <div id="products" class="row list-group">
                    <?php
                    $conexionMongo = (new MongoDB\Client)->$MDB->productos;
                    $coleccion = $conexionMongo->find([]);
                    foreach ($coleccion as $obj) {
                        if ($obj->categoria == "consumibles") {
                            ?>
                            <div class="item  col-xs-4 col-lg-4">
                                <div class="thumbnail">
                                    <a href='articulo.php?id=<?php echo $obj->_id ?>'><img class="group list-group-image" src="imagenes/productos/<?php echo $obj->imagen; ?>" alt=""/></a>
                                    <div class="caption">
                                        <h4 class="group inner list-group-item-heading">

                                            <p id="titulo" class="group inner list-group-item-text">
                                                <?php echo $obj->titulo; ?></p>                                </h4>

                                        <h5 <p id="categoria" class="group inner list-group-item-text">
                                                <?php echo $obj->categoria; ?></p></h5>
                                        <p id="description" class="group inner list-group-item-text">
                                            <?php echo $obj->descripcion; ?></p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead">
                                                    $ <?php echo $obj->precio; ?></p>
                                            </div>
                                            <div >

                                                
                                                
                                                    
                                                        <td><a btn btn-success href='/admin/agregarCarrito.php?id=<?php echo $obj->_id; ?>' class='btn btn-primary'>Agregar</a>
                                                   
                                                

                                            </div>
                                        </div>
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