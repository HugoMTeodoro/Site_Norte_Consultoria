<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
$nome = $_POST["txtNome"];
$login = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];
$senha=md5($senha);
$pieces = explode(" ", $nome);
$firstname = $pieces[0];

$sql2 = "INSERT INTO 
    usuario (login, senha,nome)
    VALUES('$login', '$senha','$firstname')";
$resultado2 = $connection->query($sql2);
if ($resultado2) {
    $sql3 = "SELECT MAX(id_usuario) as max_id FROM usuario";
    $resultado3 = $connection->query($sql3);
    $row = $resultado3->fetch_assoc();
    $last_id = $row["max_id"];
    $sql = "INSERT INTO 
    analista (nome_analista,id_usuario)
    VALUES('$nome',$last_id)";
    $resultado = $connection->query($sql);
}




if ($resultado && $resultado2 ){ ?>
    <script>
        alert("Analista cadastrado com sucesso");
        window.location = '../login/index.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o Analista. Login existente ou Nome muito grande!");
       window.location = 'createAnalista.php';
    </script>
    
<?php
}

?>