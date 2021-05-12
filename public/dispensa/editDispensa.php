<?php
include("../Template/header.php");
include_once("../../data/connection.php");


if (isset ($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM dispensa WHERE id_dispensa = '". $id . "'";
    $resultado = $connection->query($sql);
    $dispensa = $resultado->fetch_assoc();

    

?>


    <div class="form">
        <form action="updateDispensa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Editar</h3>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da dispensa</span>
                </div>

                <input type="number" name="dispensaId" class="form-control input-sm" id="dispensaId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["id_dispensa"]?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default"value="<?php echo $dispensa["exercicio"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["num_processo"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Dispensa</span>
                </div>
                <input type="number" name="numDispensa" class="form-control" id="numDispensa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["num_dispensa"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Inciso</span>
                </div>
                <select class="form-select" name="inciso" id="inciso">
                    <option value="-1" selected>Qual inciso do ART. 24, da lei 8.666/93 fundamenta a dispensa?</option>
                    <?php

                    $sqlQuery = "SELECT * FROM inciso ORDER BY inciso";

                    $inciso = $connection->query($sqlQuery);

                    if ($inciso->num_rows > 0) {

                        while ($row = $inciso->fetch_assoc()) {
                            if($dispensa["inciso"] === $row["inciso"]) {
                            ?>
                            <option value="<?php echo $row["inciso"] ?>" selected>
                                <?php echo $row["inciso"]  ?>
                            </option>
                            <?php 
                            }
                            else {
                                ?>
                                <option value="<?php echo $row["inciso"] ?>">
                                <?php echo $row["inciso"]  ?>
                            </option>

                            }
                            }
                    ?>

                            

                    <?php
                        }
                    }
                }
                    ?>
                </select>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["objeto"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria" >
                    <option value=-1 selected>Selecione a categoria</option>
                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                            if($dispensa["categoria"] === $row["categoria"]) {
                            
                            ?>
                            <option value="<?php echo $row["categoria"] ?>" selected>
                                <?php echo $row["categoria"]  ?>
                            </option>
                            <?php
                            }else {
                                ?>
                                <option value="<?php echo $row["categoria"] ?>">
                                
                                <?php echo $row["categoria"]  ?>
                            </option>
                            <?php
                            }
                        }
                    
                        }
                    
                    ?>
                </select>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de início</span>
                </div>
                <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_inicio"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de Ratificação</span>
                </div>
                <input type="date" name="dater" class="form-control" id="dater" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_ratificacao"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da portaria nomeando a comissão</span>
                </div>
                <input type="date" name="datep" class="form-control" id="datep" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_portaria_comissao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_solicitacao_compras_servicos"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_preco_estimativo"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_autorizacao_abertura"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_autuacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <input type="text" name="txtEspecificacao" class="form-control" id="txtEspecificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["especificacao_objeto"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <input type="text" name="txtEnquadramento" class="form-control" id="txtEnquadramento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["enquadramento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <input type="text" name="txtMinuta" class="form-control" id="txtMinuta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["minuta_contrato"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
                </div>
                <input type="date" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_proposta_favorecido"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <input type="text" name="txtHabilitacao" class="form-control" id="txtHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["documento_habilitacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de dispensa</span>
                </div>
                <input type="date" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_ata"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_parecer_juridico"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_contrato_firmado"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da dispensa</span>
                </div>
                <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_publicacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <input type="text" name="txtCopias" class="form-control" id="txtCopias" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["copia_empenho_compras_legais"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor total do processo</span>
                </div>
                <input type="number" name="numTotal" class="form-control" id="numTotal" aria-label="Default" step="0.01" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["valor_total"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <input type="text" name="txtObservacoes" class="form-control" id="txtObservacoes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["observacoes"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime-local" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_lancamento"]?>">
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