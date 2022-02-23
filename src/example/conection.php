<?php 
$mysqli = new mysqli("mysql", "root", "2456789", "database_login_php");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>