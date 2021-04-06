<?php

    $servername = "localhost";
    $username= "root";
    $password = "admindb";
    $dbname = "norteconsultoria";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn -> connect_error) {
        die ("Erro ao conectar com o banco" . $conn -> connect_error);
    }
?>