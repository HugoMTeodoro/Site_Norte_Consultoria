<?php include("../Template/header.php");
include("../../data/connection.php");


$sql="select * from '$tipo' where codigo_processo='$codigo'";
echo $sql;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Considerações</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertCategoria.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Considerações</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $codigo ?>" readonly>
            </div>

           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>