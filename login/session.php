<?php
$MDB = "proyecto";
// librería mongodb
require '../vendor/autoload.php';

// chequeo la sesión
session_start();
if(!isset($_SESSION['login_user'])) {
  header('Location: index.php');
  exit;
}
$user_check=$_SESSION['login_user'];

// conecto a mongodb
$client = new MongoDB\Client(
  "mongodb://localhost",
  [ 'username' => "usuariodb",
    'password' => "12345",
    'authSource' => "proyecto"
  ]
);
//busco el usuario
$collection = $client->$MDB->usuarios;
$usuario = $collection->findOne(
  [ 'login'    => $user_check ]
);

// obtengo los datos
if($usuario) {
  $login_session = $user_check;
}
if(!isset($login_session)){
  header('Location: index.php');
  exit();
}
?>