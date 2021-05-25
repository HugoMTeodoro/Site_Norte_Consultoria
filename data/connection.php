<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "db_norte";

    $connection = new mysqli($servername, $username, $password, $dbname);


    if ($connection -> connect_error) {
        die ("Erro ao conectar com o banco" . $connection -> connect_error);
    }
?>