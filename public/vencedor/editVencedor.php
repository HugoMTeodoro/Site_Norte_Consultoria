<?php
include("../Template/header.php");
include_once("../../data/connection.php");


if (isset ($_GET["id"])) {
    $idedit = $_GET["id"];
    
    $sql = "SELECT * FROM vencedor WHERE id_vencedor = '". $idedit . "'";
    $resultado = $connection->query($sql);
    $vencedor = $resultado->fetch_assoc();
    

?>


    <div class="form">
        <form action="updateVencedor.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Editar</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID Vencedor</span>
                </div>
                <input type="text" name="txtIDV" class="form-control" id="txtIDV" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $vencedor["id_vencedor"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $vencedor["codigo_processo"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID do Processo</span>
                </div>
                <input type="text" name="txtID" class="form-control" id="txtID" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $vencedor["id_processo"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Empresa</span>
                </div>
                <input type="text" name="txtEmpresa" class="form-control" id="txtEmpresa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $vencedor["nome_empresa"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor</span>
                </div>
                <input type="number" step=0.01 name="txtValor" class="form-control" id="txtValor" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $vencedor["valor"] ?>">
            </div>


            <br>
            <div class="buttons">


                <input type="submit" class="btn btn-success" value="Atualizar">
                <input type="reset" class="btn btn-danger" value="Cancelar">

            </div>

        </form>
    </div>

<?php
}
?>