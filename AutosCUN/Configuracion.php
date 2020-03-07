<?php
//DB details
$dbHost = 'proeycto2020.database.windows.net';
$dbUsername = 'cpaez';
$dbPassword = 'Cristian2020*';
$dbName = 'autoscun';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>
