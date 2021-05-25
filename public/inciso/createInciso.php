<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inciso</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertInciso.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Inciso</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Inciso</span>
                </div>
                <input type="text" name="txtInciso" class="form-control" id="txtInciso" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>