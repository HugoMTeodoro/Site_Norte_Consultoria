    <?php

    include_once("../../data/connection.php");
    
    if (isset($_POST)) {
        $empresa = $_POST["txtEmpresa"];
        $valor = $_POST["txtValor"];
        $vencedor=$_POST["txtIDV"];

    $sql = "UPDATE vencedor SET nome_empresa='$empresa', valor='$valor' where id_vencedor='$vencedor'";
 
        


    $resultado = $connection -> query($sql);

    if ($resultado){ ?>
        <script>
            alert("Vencedor editado com sucesso");
            window.location = 'createVencedor.php';
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