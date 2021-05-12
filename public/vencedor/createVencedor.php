<?php
include("../template/header.php");
include_once("../../data/connection.php");
$codigo=$_POST["codigo"];
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

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $codigo ?>" readonly>
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
    include("../aditivo/createAditivo.php");
    include("../aditivo/listAditivo.php")  ;
       
    ?>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <form name="myform" action="../consideracoes/createConsideracoes.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="submit" class="btn btn-primary" value="Proximo">
    </form>
</body>

</html>