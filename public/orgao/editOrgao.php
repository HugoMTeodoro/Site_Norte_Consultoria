<?php include("../Template/header.php");
include("../../data/connection.php");

include("../Template/header.php");
include_once("../../data/connection.php");



if (isset ($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM orgao WHERE id_orgao = '". $id . "'";
    $resultado = $connection->query($sql);
    $orgao = $resultado->fetch_assoc();

    echo $sql;

?>




    <br>
    <br>

    
    <div class="form">
        <form action="updateOrgao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Órgão</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id do órgão</span>
                </div>

                <input type="number" name="orgaoId" class="form-control input-sm" id="orgaoId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $orgao["id_orgao"]?>" readonly>
            </div>
           
    
           
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                </div>
                <input type="text" name="txtNome" class="form-control" id="txtNome" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php  echo $orgao["nome_orgao"]?>" >
            </div>


            
           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Concluir">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../orgao/listOrgao.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>





<?php
}
?>