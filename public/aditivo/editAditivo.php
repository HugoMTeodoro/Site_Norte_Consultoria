<?php
include("../Template/header.php");
include_once("../../data/connection.php");



if (isset ($_GET["id"])) {
    $idedit = $_GET["id"];
 
    
    
    $sql = "SELECT * FROM aditivo WHERE id_aditivo = '". $idedit . "'";
    $resultado = $connection->query($sql);
    $aditivos = $resultado->fetch_assoc();
    

?>


    <div class="form">
        <form action="updateAditivo.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
        <br>
            <h3>Editar</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo do Processo</span>
                </div>
                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $aditivos["codigo_processo"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID do Processo</span>
                </div>
                <input type="text" name="txtID" class="form-control" id="txtID" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $aditivos["id_processo"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número aditivo</span>
                </div>
                <input type="number" name="numAditivo" class="form-control" id="numAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $aditivos["numero_aditivo"] ?>">
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data do aditivo</span>
                </div>
                <input type="date" name="dateAditivo" class="form-control" id="dateAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $aditivos["data_aditivo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                </div>
                <select class="form-select" name="tipoAditivo" id="tipoAditivo">
                    <?php
                        if($aditivos["tipo_aditivo"]=="Prazo"){
                            ?>
                            <option value="Prazo" selected>
                                <?php echo "Prazo"  ?>
                            </option>
                            <?php
                        }else{
                            ?>
                            <option value="Prazo">
                                <?php echo "Prazo"  ?>
                            </option>
                            <?php

                        }
                    ?>
                    <?php
                        if($aditivos["tipo_aditivo"]=="Valor"){
                            ?>
                            <option value="Valor" selected>
                                <?php echo "Valor"  ?>
                            </option>
                            <?php
                        }else{
                            ?>
                            <option value="Valor" >
                                <?php echo "Valor"  ?>
                            </option>
                            <?php 
                        }
                    ?>
                    <?php
                        if($aditivos["tipo_aditivo"]=="Valor e Prazo"){
                            ?>
                            <option value="Valor e Prazo" selected>
                                <?php echo "Valor e Prazo"  ?>
                            </option>
                            <?php
                        }else{
                            ?>
                            <option value="Valor e Prazo" >
                                <?php echo "Valor e Prazo"  ?>
                            </option>
                            <?php
                        }
                    ?>

                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo aditivado</span>
                </div>
                <input type="date" name="datePrazo" class="form-control" id="datePrazo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $aditivos["prazo_aditivo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor aditivo</span>
                </div>
                 <input type="number" name="numValorAditivo" step="0.01" min="0.01" class="form-control" id="numValorAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $aditivos["valor_aditivo"] ?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Empresa</span>
                </div>
                <select class="form-select" name="Empresa" id="Empresa">
                    <?php
                    
                    $sqlQuery = "SELECT nome_empresa FROM vencedor where codigo_processo = '$cod'";
                    echo $sqlQuery;

                    $empresas = $connection->query($sqlQuery);

                    if ($empresas->num_rows > 0) {

                        while($row = $empresas -> fetch_assoc())
                            {
                                if($empresas["nome_empresa"] == $aditivos["nome_empresa"])
                                {
                    ?>
                                    <option value="<?php echo $row["nome_empresa"]?>" selected>
                                        <?php echo $row["nome_empresa"] ?>
                                    </option>
                    <?php
                                }
                                else
                                {
                    ?>                    
                                    <option value="<?php echo $row["nome_empresa"]?>">
                                        <?php echo $row["nome_empresa"]?>
                                    </option>
                    
                    <?php
                                }
                            }
                    }
                    ?>
                </select>
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