<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'cms_basico';

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die('Conexión fallida: ' . $conn->connect_error);
    }
?>
