<?php include('login.php');
?>
<html>
    <head>
        <link rel="shortcut icon" href="../imagenes/favicon.png" > 
        <title>PC-INFORMATICA - Registro</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">		
    </head>

    <body background="../fonlog.jpg" alt="Header" class="responsive-img center-box">

        <div class="container">

            <div class="col-md-8" id="section">
                <center>
                    <h1>Ingreso de Administrador</h1><br/>

                    <form action="" method="post">
                        <img src="../admin/dist/img/avatar5.png" height="100px" class="img-circle" alt="User Image"><br/>
                        <div class="form-group">
                            <label for="username">Ingrese Usuario administrador</label>

                            <input required type="text" class="form-control" id="name" name="username" placeholder="Nombre de usuario"><br/>
                        </div>
                        <div class="form-group">
                            <label for="password">Contrase&ntilde;a</label>
                            <input required type="password" class="form-control" id="password" name="password" placeholder="**********"><br/>
                            <span><?php echo $error; ?></span>
                        </div>

                        <button type="submit" name="submit" class="btn btn-default" value=" Login ">Ingresar</button>
                    </form>
                </center>
            </div>

        </div>
        <script src="js/valida_login.js"></script>
    </body>
</html>