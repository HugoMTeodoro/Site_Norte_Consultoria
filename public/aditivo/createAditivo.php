<?php
include("../template/header.php");
include_once("../../data/connection.php");
include("../Login/valida.php");
$tipo = $_POST["tipo"];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aditivo</title>
</head>

<body>
    <br>
    <br>
    <br>

    <div class="form">
        <form action="../aditivo/insertAditivo.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastro de aditivo</h3>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $codigo ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID do Processo</span>
                </div>
                <input type="text" name="txtID" class="form-control" id="txtID" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $idproc ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número aditivo</span>
                </div>
                <input type="number" name="numAditivo" class="form-control" id="numAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data do aditivo</span>
                </div>
                <input type="date" name="dateAditivo" class="form-control" id="dateAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                </div>
                <select class="form-select" name="tipoAditivo" id="tipoAditivo">

                    <option value="Prazo">
                        <?php echo "Prazo"  ?>
                    </option>
                    <option value="Valor">
                        <?php echo "Valor"  ?>
                    </option>
                    <option value="Valor e Prazo">
                        <?php echo "Valor e Prazo" ?>
                    </option>

                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo aditivado</span>
                </div>
                <input type="date" name="datePrazo" class="form-control" id="datePrazo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor aditivo</span>
                </div>
                <input type="number" name="numValorAditivo" step="0.01" min="0.01 class=" form-control" id="numValorAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Empresa</span>
                </div>
                <select class="form-select" name="Empresa" id="Empresa">
                    <?php

                    $sqlQuery = "SELECT nome_empresa FROM vencedor where codigo_processo = '$codigo'";

                    $empresas = $connection->query($sqlQuery);

                    if ($empresas->num_rows > 0) {

                        while ($row = $empresas->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["nome_empresa"] ?>" selected>
                                <?php echo $row["nome_empresa"]  ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <?php

            $sqlQuery = "SELECT categoria,exercicio FROM $tipo where codigo_processo = '$codigo'";

            $empresas = $connection->query($sqlQuery);

            if ($empresas->num_rows > 0) {

                while ($row = $empresas->fetch_assoc()) {
                    $categoria = $row["categoria"];
                    $exercicio = $row["exercicio"];
            ?>



            <?php
                }
            }
            ?>
            



            <input type="hidden" name="categoria" value="<?php echo $categoria ?>">
            <input type="hidden" name="exercicio" value="<?php echo $exercicio ?>">

            <br>
            <div class="buttons">
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">
                <input type="submit" class="btn btn-success" value="Cadastrar">
            </div>


        </form>
    </div>


</body>

</html>