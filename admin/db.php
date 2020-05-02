<?php
require_once __DIR__ . "./../vendor/autoload.php";
$MDB = "proyecto";
$conn = (new MongoDB\Client);
$db = $conn->$MDB;
?>