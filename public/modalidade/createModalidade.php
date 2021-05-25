<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
$action = $_POST["action"];; ?>

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
        <form action="insertModalidade.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Modalidade</h3>



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
                    <span class="input-group-text" id="inputGroup-sizing-default">Número </span>
                </div>
                <input type="number" name="numero" class="form-control" id="numero" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
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
                <input type="date" name="dateAbertura" class="form-control" id="dateAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da sessão</span>
                </div>
                <input type="date" name="datesess" class="form-control" id="datesess" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <textarea name="txtEnquadramento" id="txtEnquadramento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
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
                <textarea name="txtMinuta" id="txtMinuta" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação da minutas e seus anexos</span>
                </div>
                <input type="date" name="dateAprovMin" class="form-control" id="dateAprovMin" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de emissão</span>
                </div>
                <input type="date" name="dateemi" class="form-control" id="dateemi" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do edital</span>
                </div>
                <input type="date" name="datePubEd" class="form-control" id="datePubEd" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <textarea name="txtEspecificacao" id="txtEspecificacao" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
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
                <textarea name="txtHabilitacao" id="txtHabilitacao" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de abertura</span>
                </div>
                <input type="date" name="dateAtaAbertura" class="form-control" id="dateAtaAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data confirmação de autenticidade</span>
                </div>
                <input type="date" name="dateAutenticidade" class="form-control" id="dateAutenticidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal da proposta</span>
                </div>
                <input type="date" name="datePrazoProposta" class="form-control" id="datePrazoProposta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                <textarea name="txtClassificados" id="txtClassificados" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do resultado do julgamento</span>
                </div>
                <input type="date" name="dateResultadoJulgamento" class="form-control" id="dateResultadoJulgamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal da habilitação</span>
                </div>
                <input type="date" name="datePrazoHabilitacao" class="form-control" id="datePrazoHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do contrato</span>
                </div>
                <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de última pesquisa de preço</span>
                </div>
                <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de última pesquisa de preço</span>
                </div>
                <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <textarea name="txtCopias" id="txtCopias" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <?php

            $sqlQuery = "SELECT nome FROM usuario where id_usuario='$id_usuario'";

            $usuario = $connection->query($sqlQuery);

            if ($usuario->num_rows > 0) {

                while ($row = $usuario->fetch_assoc()) {
                    $nome = $row["nome"];
            ?>
            <?php
                }
            }
            ?>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Analista responsável</span>
                </div>
                <input type="text" name="txtAnalista" class="form-control" id="txtAnalista" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $nome ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Órgão</span>
                </div>
                <select class="form-select" name="txtOrgao" id="txtOrgao">

                    <?php

                    $sqlQuery = "SELECT * FROM orgao";

                    $orgaos = $connection->query($sqlQuery);

                    if ($orgaos->num_rows > 0) {

                        while ($row = $orgaos->fetch_assoc()) {
                            if ($orgaocrud == $row["nome_orgao"]) {
                    ?>
                                <option value="<?php echo $row["nome_orgao"] ?>" selected>
                                    <?php echo $row["nome_orgao"] ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome_orgao"] ?>">
                                    <?php echo $row["nome_orgao"] ?>
                                </option>

                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>


            <?php
            date_default_timezone_set('America/Sao_Paulo');
            $agora = date('d/m/Y H:i');
            $dc = trim($agora);
            $data = date("Y-d-m", strtotime($dc));
            $hora = date("H:i", strtotime($dc));
            $datac = $data . "T" . $hora;
            ?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime-local" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $datac ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Porcentagem de aditivo permitida</span>
                </div>
                <input oninput="v_ = this.value; if(v_.length > 5){ this.value = v_.slice(0, 5); }" onblur="v_ = this.value; if(!~v_.indexOf('.')){ vl_ = v_.length; z_ = vl_ == 1 ? '0.00' : ( vl_ == 3 ? '0' : (vl_ == 2 ? '00' : ''));this.value = v_.length < 5 && v_ != '100' ? (((v_[0] ? v_[0] : '')+(v_[1] ? v_[1]+'.' : '')+(v_[2] ? v_[2] : '')+(v_[3] ? v_[3] : '')+(v_[4] ? v_[4] : '')+z_)):('100.00')};" type="number" id="numPorcent" step=".01" min=".01" max="100">
            </div>

            <br>


            <div class="buttons">
                <input type="hidden" name="tipo" id="tipo" value="inexigibilidade">
                <input type="hidden" name="action" id="action" value="<?php echo $action ?>">


                <input type="submit" class="btn btn-success" value="Proximo">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../modalidade/listModalidade.php'" value="Cancelar">

            </div>
    </div>







    </form>
    </div>


</body>

</html>