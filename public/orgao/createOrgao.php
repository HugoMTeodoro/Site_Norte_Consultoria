<?php include("../Template/header.php");
include("../../data/connection.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órgão</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertOrgao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Órgão</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                </div>
                <input type="text" name="txtNome" class="form-control" id="txtNome" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../orgao/listOrgao.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>