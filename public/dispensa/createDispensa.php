<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
$action = $_POST["action"];; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispensa</title>
</head>

<body>
    <br>
    <br>


    <div class="form">
        <form action="insertDispensa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Dispensa</h3>



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
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Dispensa</span>
                </div>
                <input type="number" name="numDispensa" class="form-control" id="numDispensa" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Inciso</span>
                </div>
                <select class="form-select" name="inciso" id="inciso">
                    <option selected>Nenhum</option>
                    <?php

                    $sqlQuery = "SELECT * FROM inciso ORDER BY inciso";

                    $inciso = $connection->query($sqlQuery);

                    if ($inciso->num_rows > 0) {

                        while ($row = $inciso->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["inciso"] ?>" selected>
                                <?php echo $row["inciso"]  ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Dispensa por uma ordem de emergência?</span>
                </div>
                <select class="form-select" name="tipoEmergencia" id="tipoEmergencia">
                
                            <option value="Nao">
                                <?php echo "Não"  ?>
                            </option>
                            <option value="Sim">
                                <?php echo "Sim"  ?>
                            </option>

                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Dispensa para atender uma ordem judicial?</span>
                </div>
                <select class="form-select" name="tipoJudicial" id="tipoJudicial">
                
                            <option value="Nao">
                                <?php echo "Não"  ?>
                            </option>
                            <option value="Sim">
                                <?php echo "Sim"  ?>
                            </option>

                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria">
                    <!--<option value="-1" selected>Selecione a categoria</option>-->
                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["categoria"] ?> ">
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
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de início</span>
                </div>
                <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de Ratificação</span>
                </div>
                <input type="date" name="dater" class="form-control" id="dater" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da portaria nomeando a comissão</span>
                </div>
                <input type="date" name="datep" class="form-control" id="datep" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da sessao</span>
                </div>
                <input type="date" name="datesessao" class="form-control" id="datesessao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da abertura do processo</span>
                </div>
                <input type="date" name="dateabertura" class="form-control" id="dateabertura" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <textarea name="txtEspecificacao" id="txtEspecificacao" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <textarea name="txtEnquadramento" id="txtEnquadramento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <textarea name="txtMinuta" id="txtMinuta" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
                </div>
                <input type="date" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <textarea name="txtHabilitacao" id="txtHabilitacao" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de dispensa</span>
                </div>
                <input type="date" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da dispensa</span>
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

            <br>
            <div class="buttons">
                <input type="hidden" name="tipo" id="tipo" value="dispensa">
                <input type="hidden" name="action" id="action" value="<?php echo $action ?>">


                <input type="submit" class="btn btn-success" value="Proximo">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>







        </form>
    </div>


</body>

</html>