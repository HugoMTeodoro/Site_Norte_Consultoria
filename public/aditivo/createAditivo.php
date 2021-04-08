<?php 
    include("../template/header.php");
    include_once("../../data/connection.php");
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
        <form action="insertAditivo.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastro de aditivo</h3>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número aditivo</span>
                </div>
                <input type="number" name="numAditivo" class="form-control" id="numAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo aditivo</span>
                </div>
                <input type="date" name="datePrazo" class="form-control" id="datePrazo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aditivo</span>
                </div>
                <input type="date" name="dateAditivo" class="form-control" id="dateAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor aditivo</span>
                </div>
                 <input type="number" name="numValorAditivo" step="0.01" min="0.01 class="form-control" id="numValorAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            

            <br>    
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../aditivo/insertAditivo.php'" value="Cancelar">

            </div>


        </form>
    </div>


</body>
</html>
