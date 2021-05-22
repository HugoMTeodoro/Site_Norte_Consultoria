<?php

include_once("../../data/connection.php");
$tipo=$_POST["tipo"];
$conSolic = $_POST["conSolic"];
$conPreco = $_POST["conPreco"];
$conSolicO = $_POST["conSolicO"];
$conAtori = $_POST["conAtori"];
$conSolE = $_POST["conSolE"];
$conAut = $_POST["conAut"];
$conAuto=$_POST["conAuto"];
$conAutuacao = $_POST["conAutuacao"];
$conParec = $_POST["conParec"];
$conRat = $_POST["conRat"];
$conPub = $_POST["conPub"];
$conFir = $_POST["conFir"];
$action=$_POST["action"];
$codigo_proc=$_POST["codigo"];

$sql = "UPDATE  
    $tipo set conSolic='$conSolic', conPreco='$conPreco', conSolicO='$conSolicO', conAtori='$conAtori', conSolE='$conSolE',conAut


    where codigo_processo='$codigo_proc'";
    

$resultado = $connection -> query($sql);

if ($resultado){
     
    
    ?>
    <form name="myform" action="<?php echo $action ?>" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo_proc ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
        <input type="hidden" name="action" value="<?php echo $action ?>">
    </form>

    <script type="text/javascript"> 
    alert("Consideracao editada com sucesso");    
            document.myform.submit();
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao editar consideracao");
        window.location = $action;
       
    </script>
    
<?php
}

?>