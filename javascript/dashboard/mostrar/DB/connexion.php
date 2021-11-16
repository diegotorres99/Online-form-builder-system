<?php
    $mysqli = new mysqli("localhost", "root", "", "formularios");

    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    }

?>
