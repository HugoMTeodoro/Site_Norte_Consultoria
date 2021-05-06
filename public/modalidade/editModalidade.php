<?php include("../Template/header.php");
include("../../data/connection.php");

if (isset ($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM modalidade WHERE id_modalidade = '". $id . "'";
    $resultado = $connection->query($sql);
    $modalidade = $resultado->fetch_assoc();

    

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidade</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="updateModalidade.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Modalidade</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da modalidade</span>
                </div>

                <input type="number" name="modalidadeId" class="form-control input-sm" id="modalidadeId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["id_modalidade"]?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Modalidade</span>
                </div>
                <select class="form-select" name="modalidade" id="modalidade">
                    <option value="-1" selected>Selecione uma modalidade</option>
                    <?php

                    $sqlQuery = "SELECT * FROM tipo_modalidade ORDER BY modalidade";

                    $modalidade = $connection->query($sqlQuery);

                    if ($modalidade->num_rows > 0) {

                        while ($row = $modalidade->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["modalidade"] ?>">
                                <?php echo $row["modalidade"] ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número/span>
                </div>
                <input type="number" name="numero" class="form-control" id="numero" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Registro de preço?</span>
                </div>
                <select class="form-select" name="registro" id="registro">
                    <option value="-1" selected></option>
                    <?php

                    $sqlQuery = "SELECT * FROM registro ORDER BY registro";

                    $registro = $connection->query($sqlQuery);

                    if ($registro->num_rows > 0) {

                        while ($row = $registro->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["registro"] ?>">
                                <?php echo $row["registro"] ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="categoria" id="categoria">
                    <option value="-1" selected>Selecione a categoria</option>
                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["categoria"] ?>">
                                <?php echo $row["categoria"]  ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>


            
            
           

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data edital</span>
                </div>
                <input type="date" name="dateEdital" class="form-control" id="dateEdital" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data entrega</span>
                </div>
                <input type="date" name="dateEntrega" class="form-control" id="dateEntrega" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data abertura</span>
                </div>
                <input type="datetime-local" name="dateAbertura" class="form-control" id="dateAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data portaria nomeando a comissão</span>
                </div>
                <input type="date" name="dateNomeacao" class="form-control" id="dateNomeacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="datetime-local" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="datetime-local" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <input type="text" name="txtEnquadramento" class="form-control" id="txtEnquadramento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data edital e seus anexos</span>
                </div>
                <input type="date" name="dateEditalEAnexos" class="form-control" id="dateEditalEAnexos" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato/ata reg. preços</span>
                </div>
                <input type="text" name="txtMinuta" class="form-control" id="txtMinuta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação da minutas e seus anexos</span>
                </div>
                <input type="date" name="dateAprovMin" class="form-control" id="dateAprovMin" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do edital</span>
                </div>
                <input type="date" name="datePubEd" class="form-control" id="datePubEd" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação correta do objeto</span>
                </div>
                <input type="text" name="txtEspecificacaoObjeto" class="form-control" id="txtEspecificacaoObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data recibo de entrega do convite</span>
                </div>
                <input type="date" name="dateRecibo" class="form-control" id="dateRecibo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <input type="text" name="txtHabilitacao" class="form-control" id="txtHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de abertura</span>
                </div>
                <input type="datetime-local" name="dateAtaAbertura" class="form-control" id="dateAtaAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data confirmação de autenticidade</span>
                </div>
                <input type="date" name="dateAutenticidade" class="form-control" id="dateAutenticidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal da habilitação</span>
                </div>
                <input type="date" name="datePrazoRecursal" class="form-control" id="datePrazoRecursal" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de julgamento</span>
                </div>
                <input type="date" name="dateAtaJulgamento" class="form-control" id="dateAtaJulgamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Classificados das propostas</span>
                </div>
                <input type="text" name="txtClassificados" class="form-control" id="txtClassificados" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do resultado do julgamento</span>
                </div>
                <input type="date" name="dateResultadoJulgamento" class="form-control" id="dateResultadoJulgamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="datetime-local" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data adjudicação</span>
                </div>
                <input type="date" name="dateAdjudicacao" class="form-control" id="dateAdjudicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data homologação</span>
                </div>
                <input type="date" name="dateHomologacao" class="form-control" id="dateHomologacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="datetime-local" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do contrato</span>
                </div>
                <input type="datetime-local" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <input type="text" name="txtCopias" class="form-control" id="txtCopias" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código de registro</span>
                </div>
                <input type="text" name="txtCodReg" class="form-control" id="txtCodReg" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor total do processo</span>
                </div>
                <input type="number" name="numTotal" class="form-control" id="numTotal" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <input type="text" name="txtObservacoes" class="form-control" id="txtObservacoes" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime-local" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <br>    
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../login/index.php'" value="Cancelar">

            </div>

            

            


            
        </form>
    </div>


</body>
</html>

<?php

                }

?>