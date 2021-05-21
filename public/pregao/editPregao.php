<?php include("../Template/header.php");
include("../../data/connection.php");

   

    $codigo = $_POST["codigo"];
    $tipo = $_POST["tipo"];
    $action = $_POST["action"];
  
    $sql = "SELECT * FROM pregao WHERE codigo_processo = '". $codigo . "'";
    $resultado = $connection->query($sql);
    $pregao = $resultado->fetch_assoc();

    


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregão</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="updatePregao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Pregão</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id do pregão</span>
                </div>
                <input type="number" name="pregaoId" class="form-control input-sm" id="pregaoId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["id_pregao"]?>" readonly>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["exercicio"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["num_processo"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tipo Pregão</span>
                </div>
                <select class="form-select" name="txtPregao" id="txtPregao">
                    <option value="-1" selected>Selecione um tipo de pregão</option>
                    <?php

                    $sqlQuery = "SELECT * FROM tipo ORDER BY pregao";

                    $pregao1 = $connection->query($sqlQuery);

                    if ($pregao1->num_rows > 0) {

                        while ($row = $pregao1->fetch_assoc()) {
                            if ($pregao1["tipo"] === $row["tipo"]) {
                                ?>
                                <option value="<?php echo $row["tipo"] ?>" selected>
                                    <?php echo $row["tipo"]  ?>
                                </option>
                                <?php
                            } else { ?>
                                <option value="<?php echo $row["tipo"] ?>">
                                
                                <?php echo $row["tipo"]  ?>
                            </option>
                            <?php
                            }
                           
                        
                    ?>

                            

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número</span>
                </div>
                <input type="number" name="num" class="form-control" id="num" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["numero"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>

                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["objeto"]?>">
            </div>
            


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Registro</span>
                </div>
                <select class="form-select" name="registro" id="registro">
                    <option value="-1" selected>Registro de preço?</option>
                    <?php

                    $sqlQuery = "SELECT * FROM registro ORDER BY registro";

                    $registro = $connection->query($sqlQuery);

                    if ($registro->num_rows > 0) {

                        while ($row = $registro->fetch_assoc()) {
                            if ($pregao["registro"] === $row["registro"]) {
                                ?>
                                <option value="<?php echo $row["registro"] ?>" selected>
                                    <?php echo $row["registro"]  ?>
                                </option>
                                <?php
                            } else { ?>
                                <option value="<?php echo $row["registro"] ?>">
                                
                                <?php echo $row["registro"]  ?>
                            </option>
                            <?php
                            }
                           
                        
                    ?>

                            

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
                    <span class="input-group-text" id="inputGroup-sizing-default">Data edital</span>
                </div>
                <input type="date" name="dateEdital" class="form-control" id="dateEdital" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_edital"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de abertura</span>
                </div>
                <input type="date" name="dateAbertura" class="form-control" id="dateAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_abertura"]?>">
            </div>


           

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data do ato da nomeação pregoeiro/comissão</span>
                </div>
                <input type="date" name="dateNomeacao" class="form-control" id="dateNomeacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_nomeacao"]?>">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_solicitacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_orcamento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_autorizacao"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_autuacao"]?>">
            </div>
            
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade</span>
                </div>
                <input type="text" name="txtEnquadramento" class="form-control" id="txtEnquadramento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["enquadramento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Edital e seus anexos</span>
                </div>
                <input type="text" name="txtEdital" class="form-control" id="txtEdital" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["edital"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação das minutas do edital e seus anexos</span>
                </div>
                <input type="date" name="dateAprov" class="form-control" id="dateAprov" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_aprovacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <input type="text" name="txtMinuta" class="form-control" id="txtMinuta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["minuta"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de publicação do edital</span>
                </div>
                <input type="date" name="datePub" class="form-control" id="datePub" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_publicacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação correta do objeto</span>
                </div>
                <input type="text" name="txtEspecificacao" class="form-control" id="txtEspecificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["especificacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data credenciamento dos licitantes</span>
                </div>
                <input type="date" name="dateCred" class="form-control" id="dateCred" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_credenciamento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Proposta de preços</span>
                </div>
                <input type="number" name="numPreco" class="form-control" id="numPreco" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["proposta_precos"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de abertura/julgamento</span>
                </div>
                <input type="date" name="dateAbertura" class="form-control" id="dateAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_ata_abertura"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <input type="text" name="documentos" class="form-control" id="documentos" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["documento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de confirmação de autenticidade</span>
                </div>
                <input type="date" name="dateConfirmacao" class="form-control" id="dateConfirmacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_confirmacao"]?>">
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal</span>
                </div>
                <input type="date" name="datePrazoRec" class="form-control" id="datePrazoRec" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["prazo"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data adjudicação</span>
                </div>
                <input type="date" name="dateAdjudicacao" class="form-control" id="dateAdjudicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_adjudicacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_parecer"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data homologação</span>
                </div>
                <input type="date" name="dateHomologacao" class="form-control" id="dateHomologacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_homologacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateContratoFirmado" class="form-control" id="dateContratoFirmado" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_contrato_firmado"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do contrato/ata</span>
                </div>
                <input type="date" name="datePublicacaoAta" class="form-control" id="datePublicacaoAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_publicacao_ata"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <input type="text" name="txtCopias" class="form-control" id="txtCopias" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pregao["dt_lancamento"]?>">
            </div>


            <div class="buttons">
            <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
            <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
            <input type="hidden" name="action" value="<?php echo $action ?>">

            <input type="submit" class="btn btn-success" value="Atualizar">
            <input type="reset" class="btn btn-danger" value="Cancelar">

        </div>

            

            


            
        </form>
    </div>


</body>
</html>

<section id="vencedores"></section>
    <section id="lvencedores"></section>
    <?php
    include("../vencedor/listVencedor.php");  
    ?>
    <HR WIDTH=85%>
    <section id="aditivo"></section>
    <?php
    include("../aditivo/createAditivo.php");
    ?>
    <HR WIDTH=85%>
    <section id="laditivo"></section>
    <?php
    include("../aditivo/listAditivo.php")  ;
    ?>
    <HR WIDTH=85%>
    <section id="consideracoes">    </section>
    <?php
    include("../consideracoes/editConsideracoesDisp.php");
    ?>