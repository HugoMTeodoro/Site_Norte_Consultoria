<?php
include("../template/header.php");
include_once("../../data/connection.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Vencedor</title>
</head>

<body>
    <br>
    <br>
    <br>

    <div class="form">
        <form action="insertVencedor.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastro de Vencedor</h3>
            <br>
            <?php

            $sqlQuery = "SELECT codigo_disp,id_dispensa FROM dispensa ORDER BY id_dispensa DESC LIMIT 1";

            $codigo_disp = $connection->query($sqlQuery);

            if ($codigo_disp->num_rows > 0) {

                while ($row = $codigo_disp->fetch_assoc()) {
                    $codigo = $row["codigo_disp"];
                    $idproc=$row["id_dispensa"];
            ?>
            <?php
                }
            }
            ?>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $codigo ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID do Processo</span>
                </div>
                <input type="text" name="txtID" class="form-control" id="txtID" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $idproc ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Empresa</span>
                </div>
                <input type="text" name="txtEmpresa" class="form-control" id="txtEmpresa" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor</span>
                </div>
                <input type="number" step=0.01 name="txtValor" class="form-control" id="txtValor" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <br>
            <div class="buttons">

                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../home/home.php'" value="Cancelar">
                
            </div>


        </form>
    </div>
    <?php
    include ("listVencedor.php");        
    ?>
</body>

</html>