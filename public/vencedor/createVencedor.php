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
        <form action="insertModalidade.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastro de Vencedor</h3>
            <br>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tipo modalidade</span>
                </div>
                <input type="text" name="txtModalidade" class="form-control" id="txtModalidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            

            <br>    
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>


        </form>
    </div>


</body>
</html>
