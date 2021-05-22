<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
$action=$_POST["action"];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adesão</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertAdesao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Adesão</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo da adesão</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº processo de inexigibilidade</span>
                </div>
                <input type="number" name="numInexigibilidade" class="form-control" id="numInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria">
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
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de início inexigibilidade</span>
                </div>
                <input type="datetime-local" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ratificação</span>
                </div>
                <input type="datetime-local" name="dateRatificacao" class="form-control" id="dateRetificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data portaria nomeando a comissão</span>
                </div>
                <input type="date" name="datepo" class="form-control" id="datepo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="datetime-local" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="datetime-local" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data solicitação ao órgão realizador do RP</span>
                </div>
                <input type="datetime-local" name="dateSolicitacaoRP" class="form-control" id="dateSolicitacaoRP" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autorização do órgão realizador do RP</span>
                </div>
                <input type="datetime-local" name="dateAutorizacaoRP" class="form-control" id="dateAutorizacaoRP" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data solicitação à empresa adjudicatária</span>
                </div>
                <input type="date" name="dateSolicitacaoAdjudicataria" class="form-control" id="dateSolicitacaoAdjudicataria" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Autorização da empresa Adjudicatária</span>
                </div>
                <input type="date" name="dateautAdjudicataria" class="form-control" id="dateautAdjudicataria" aria-label="Default" inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Verificação montante adjudicado</span>
                </div>
                <input type="text" name="txtVerificacao" class="form-control" id="txtVerificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="S-sizing-default">Documento habilitação da adjudicatária</span>
                </div>
                <input type="text" name="txtDocAdjudicataria" class="form-control" id="txtDocAdjudicataria" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data confirmação autenticidade</span>
                </div>
                <input type="date" name="dateConfirmacaoAutenticidade" class="form-control" id="dateConfirmacaoAutenticidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata resolução do carona</span>
                </div>
                <input type="date" name="dateAtaC" class="form-control" id="dateAtaC" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autorização</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="datetime-local" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de inexigibilidade de licitação</span>
                </div>
                <input type="datetime-local" name="dateAtaInexigibilidade" class="form-control" id="dateAtaInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="datetime-local" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da inexigibilidade licitação</span>
                </div>
                <input type="datetime-local" name="datePublicacaoInexigibilidade" class="form-control" id="datePublicacaoInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="datetime-local" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do contrato/span>
                </div>
                <input type="datetime-local" name="datePublicacaoContrato" class="form-control" id="datePublicacaoContrato" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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

                        $orgaos = $connection -> query($sqlQuery);

                        if($orgaos -> num_rows > 0)
                        {

                            while($row = $orgaos -> fetch_assoc())
                            {
                                if($orgaocrud == $row["nome_orgao"])
                                {
                    ?>
                                    <option value="<?php echo $row["nome_orgao"]?>" selected>
                                        <?php echo $row["nome_orgao"] ?>
                                    </option>
                    <?php
                                }
                                else
                                {
                    ?>                    
                                    <option value="<?php echo $row["nome_orgao"]?>">
                                        <?php echo $row["nome_orgao"]?>
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
            <input type="hidden" name="tipo" id="tipo" value="adesao" >
            <input type="hidden" name="action" id="action" value="<?php echo $action ?>" >
            
        
                <input type="submit" class="btn btn-success" value="Proximo" >
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../adesao/listAdesao.php'" value="Cancelar">

            </div>
            </div>

            
                        
            


            
        </form>
    </div>


</body>
</html>