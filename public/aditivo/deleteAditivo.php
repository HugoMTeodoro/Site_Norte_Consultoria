<?php 
        include_once("../../data/connection.php");
        if (isset ($_GET["id"])) {
            $sql = "select codigo_processo FROM aditivo WHERE id_aditivo = " . $_GET["id"];
            $resultado = $connection->query($sql);
            while ($percorrer = $resultado->fetch_assoc()) {
        
                $codigo_proc = $percorrer['codigo_processo'];
            }

            $sql = "DELETE FROM aditivo WHERE id_aditivo = " . $_GET["id"];

            if ($connection -> query($sql) === TRUE) {
 ?>
                <form name="myform" action="../vencedor/createVencedor.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
    </form>

    <script type="text/javascript"> 
    alert("Aditivo excluido com sucesso");    
            document.myform.submit();
    </script>

                <?php
            

            }
        else {
               ?>
            <script>
            alert("Erro ao excluir o aditivo");
            window.location = "../vencedor/createVencedor.php";
            </script> 
<?php

    }
}

?>