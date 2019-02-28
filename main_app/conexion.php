<?php
    $mysqli = new mysqli("localhost", "root", "", "prueba");

    if ($mysqli->connect_errno):
       echo "Conexión fallida: %s\n", $mysqli->connect_error;
    endif;


?>