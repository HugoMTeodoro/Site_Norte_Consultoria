<?php

include_once("../../data/connection.php");


if ((isset($_POST['login'])) && (isset($_POST['senha']))) {

    $user = $_POST['login'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $sql = "select * from usuario where login = '$user' and senha = '$senha'";
    $resultado = $connection->query($sql);
    $num = mysqli_num_rows($resultado);
    if ($num == 1) {


        $sqlQuery = "UPDATE orgao_atual
    SET nome_orgao_atual = ''
    WHERE id_orgao_atual = 0;";



        $orgaos = $connection->query($sqlQuery);

        while ($percorrer = $resultado->fetch_assoc()) {
            session_start();
            $id = $percorrer['id_usuario'];
            $_SESSION['logado'] = $id;
?>
            <script>
                window.location = "../home/orgao.php";
            </script>
        <?php

        }
    } else {

        ?>
        <script>
            alert("Credenciais incorretas");
            window.location = "index.php";
        </script>
<?php

    }
}
