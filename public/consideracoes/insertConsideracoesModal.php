<?php

include_once("../../data/connection.php");
$tipo=$_POST["tipo"];
$conSolic = $_POST["conSolic"];
$conPreco = $_POST["conPreco"];
$conAut = $_POST["conAut"];
$conAtuacao = $_POST["conAtuacao"];
$conAprov = $_POST["conAprov"];
$conPub = $_POST["conPub"];
$conAta = $_POST["conAta"];
$conPar = $_POST["conPar"];
$conFirm = $_POST["conFirm"];

$codigo_proc = $_POST["codigo"];
$action=$_POST["action"];

$sql = "UPDATE  
    $tipo set conSolic='$conSolic', conPreco='$conPreco', conAut='$conAut',conAtuacao='$conAtuacao',conAprov='$conAprov',conPub='$conPub', conAta='$conAta', conPar='$conPar',
    conFirm='$conFirm'
    where codigo_processo='$codigo_proc'";
    echo $sql;

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