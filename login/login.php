<?php

$MDB = "proyecto";
// libreria mongodb
require '../vendor/autoload.php';

session_start();
$error = '';

//si es un POST
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Â¡Usuario o password incorrecto!";
    } else {
        // obtengo datos del post
        $username = $_POST['username'];
        $password = $_POST['password'];


        // conecto a mongodb
        $client = new MongoDB\Client(
                "mongodb://localhost", ['username' => "usuariodb",
            'password' => "12345",
            'authSource' => "proyecto"
                ]
        );
        // busco usuario con login y pass
        $collection = $client->$MDB->usuarios;
        $usuario = $collection->findOne(
                ['login' => $username,
                    'password' => $password
                ]
        );

        // si encuentra usuario con ese user+pass
        if ($usuario) {
            $_SESSION['login_user'] = $usuario['login'];
            header("location: ../admin/starter.php");
            exit();
        } else {
            $error = "¡Usuario o password incorrecto!";
        }
    }
}
?>