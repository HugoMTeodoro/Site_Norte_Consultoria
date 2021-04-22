<?php include("../Template/header.php");
include("../../data/connection.php");

include("../Template/header.php");
include_once("../../data/connection.php");



if (isset ($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM inciso WHERE id_inciso = '". $id . "'";
    $resultado = $connection->query($sql);
    $inciso = $resultado->fetch_assoc();

?>




    <br>
    <br>

    
    <div class="form">
        <form action="updateInciso.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Inciso</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id do Inciso</span>
                </div>

                <input type="number" name="incisoId" class="form-control input-sm" id="incisoId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inciso["id_inciso"]?>" readonly>
            </div>
           
    
           
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Inciso</span>
                </div>
                <input type="text" name="txtInciso" class="form-control" id="txtInciso" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php  echo $inciso["inciso"]?>" >
            </div>


            
           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Concluir">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../inciso/listInciso.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>





<?php
}
?>