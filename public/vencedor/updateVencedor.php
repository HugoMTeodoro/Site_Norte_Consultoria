    <?php

    include_once("../../data/connection.php");

    if (isset($_POST)) {
        $empresa = $_POST["txtEmpresa"];
        $valor = $_POST["txtValor"];
        $vencedor = $_POST["txtIDV"];
        $codigo = $_POST["txtCodigo"];
        $sql = "UPDATE vencedor SET nome_empresa='$empresa', valor='$valor' where id_vencedor='$vencedor'";




        $resultado = $connection->query($sql);

        if ($resultado) { ?>
            <form name="myform" action="../vencedor/createVencedor.php" method="POST">
                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
            </form>

            <script type="text/javascript">
                alert("Vencedor editado com sucesso");
                document.myform.submit();
            </script>
        <?php
        } else {
            echo $sql ?>

            <script>
                alert("Ocorreu um erro ao editar o vencedor");
                window.location = 'createVencedor.php';
            </script>

    <?php
        }
    }

    ?>