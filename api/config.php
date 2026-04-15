<?php
$host = "localhost"; 
$user = "TU_USUARIO";
$pass = "TU_PASSWORD";
$dbname = "apple_scrape";

$connection = new mysqli($host, $user, $pass, $dbname);

if ($connection->connect_error) {
    die(" Error de conexión: " . $connection->connect_error);
}

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
?>
