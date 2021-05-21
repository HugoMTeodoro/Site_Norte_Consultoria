<?php 
include("../template/header.php");
include_once("../../data/connection.php");
$codigo=$_POST["codigo"];
$tipo=$_POST["tipo"];
$action=$_POST["action"];

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
        <form action="../vencedor/insertVencedor.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
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
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../home/home.php'" value="Cancelar">
                
            </div>


        </form>
        
    </div>
    <?php
    
   
       
    ?> 
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    










    
    
</body>

</html>

<HR WIDTH=85%>
<section id="lvencedores"></section>
    <?php
    include("../vencedor/listVencedor.php");  
    ?>
    <section id="aditivo"></section>
    <?php
    include("../aditivo/createAditivo.php");
    ?>
    <HR WIDTH=85%>
    <section id="laditivo"></section>
    <?php
    include("../aditivo/listAditivo.php")  ;
    ?>
    <HR WIDTH=85%>
    <section id="consideracoes">    </section>
    <?php
    include("../consideracoes/editConsideracoesDisp.php");
    ?>