<?php
include("../Template/header.php");
include_once("../../data/connection.php");
if (isset($_POST["action"])) {
} else {
?>
    <script>
        window.location = "../dispensa/listDispensa.php";
    </script>
<?php
}


//$id = $_POST["id"];
$codigo = $_POST["codigo"];
$tipo = $_POST["tipo"];
$action = $_POST["action"];

$sql = "SELECT * FROM adesao WHERE codigo_processo = '" . $codigo . "'";
$resultado = $connection->query($sql);
$adesao = $resultado->fetch_assoc();




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
        <form action="updateAdesao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Adesão</h3>

            <div class="buttons">
            
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
            <p align="right">
            <a href="../adesao/listadesao.php" class="btn btn-primary">Voltar </a>
            <a href="#vencedores" class="btn btn-primary">Vencedores </a>
            <a href="#aditivo" class="btn btn-primary" >Aditivo</a>
            
            <a href="#consideracoes" class="btn btn-primary">Considerações</a>

            </p>
      
            </div>

            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da adesão</span>
                </div>
                <input type="number" name="adesaoId" class="form-control input-sm" id="adesaoId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $adesao["id_adesao"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["exercicio"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº da adesão</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["num_adesao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº processo </span>
                </div>
                <input type="number" name="numInexigibilidade" class="form-control" id="numInexigibilidade" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["num_inexigibilidade"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["objeto"]?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria">

                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                            if ($adesao["categoria"] === $row["categoria"]) {

                    ?>
                                <option value="<?php echo $row["categoria"] ?>" selected>
                                    <?php echo $row["categoria"]  ?>
                                </option>
                            <?php
                            } else {
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
                <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_inicio"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ratificação</span>
                </div>
                <input type="date" name="dateRatificacao" class="form-control" id="dateRetificacao" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_ratificacao"] ?>">
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
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_solicitacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_orcamento"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data solicitação ao órgão realizador do RP</span>
                </div>
                <input type="date" name="dateSolicitacaoRP" class="form-control" id="dateSolicitacaoRP" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_solicitacaoo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autorização do órgão realizador do RP</span>
                </div>
                <input type="date" name="dateAutorizacaoRP" class="form-control" id="dateAutorizacaoRP" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_autorizacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data solicitação à empresa adjudicatária</span>
                </div>
                <input type="date" name="dateSolicitacaoAdjudicataria" class="form-control" id="dateSolicitacaoAdjudicataria" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_solicitacao_empresa"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Autorização da empresa Adjudicatária</span>
                </div>
                <input type="date" name="dateautAdjudicataria" class="form-control" id="dateautAdjudicataria" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_autorizacao_empresa"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Verificação montante adjudicado</span>
                </div>
                <textarea name="txtVerificacao" id="txtVerificacao" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["verificacao"]?></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="S-sizing-default">Documento habilitação da adjudicatária</span>
                </div>
                <textarea name="txtDocAdjudicataria" id="txtDocAdjudicataria" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["documento"]?></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data confirmação autenticidade</span>
                </div>
                <input type="date" name="dateConfirmacaoAutenticidade" class="form-control" id="dateConfirmacaoAutenticidade" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_confirmacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata resolução do carona</span>
                </div>
                <input type="date" name="dateAtaC" class="form-control" id="dateAtaC" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_ata"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização de abertura</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_autorizacao_abertura"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de abertura</span>
                </div>
                <input type="date" name="dateab" class="form-control" id="dateab" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $adesao["dt_abertura"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_autuacao"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de inexigibilidade de licitação</span>
                </div>
                <input type="date" name="dateAtaInexigibilidade" class="form-control" id="dateAtaInexigibilidade" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_ata_inexigibilidade"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_parecer"] ?>">
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da inexigibilidade licitação</span>
                </div>
                <input type="date" name="datePublicacaoInexigibilidade" class="form-control" id="datePublicacaoInexigibilidade" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_publicacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_contrato_firmado"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação do contrato/span>
                </div>
                <input type="date" name="datePublicacaoContrato" class="form-control" id="datePublicacaoContrato" aria-label="Default" inputGroup-sizing-default" value="<?php echo $adesao["dt_publicacao_contrato"] ?>">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data de última pesquisa de preço</span>
            </div>
            <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $adesao["dt_pesquisa"] ?>">
        </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["apostilamento"]?></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <textarea name="txtCopias" id="txtCopias" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["copia_notas"]?></textarea>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $adesao["observacoes"]?></textarea>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $adesao["dt_lancamento"] ?>"readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Porcentagem de aditivo permitida</span>
                </div>
                <input oninput="v_ = this.value; if(v_.length > 5){ this.value = v_.slice(0, 5); }" onblur="v_ = this.value; if(!~v_.indexOf('.')){ vl_ = v_.length; z_ = vl_ == 1 ? '0.00' : ( vl_ == 3 ? '0' : (vl_ == 2 ? '00' : ''));this.value = v_.length < 5 && v_ != '100' ? (((v_[0] ? v_[0] : '')+(v_[1] ? v_[1]+'.' : '')+(v_[2] ? v_[2] : '')+(v_[3] ? v_[3] : '')+(v_[4] ? v_[4] : '')+z_)):('100.00')};" type="number" id="numPorcent" name="numPorcent" step=".01"  max="100" value="<?php echo $adesao["porcentagem"] ?>">
            </div>



            <br>
            <div class="buttons">
                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">

                <input type="submit" class="btn btn-success" value="Atualizar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../adesao/listAdesao.php'" value="Cancelar">

            </div>

        </form>
        <HR WIDTH=85%>
    </div>
    <section id="vencedores"></section>
    <?php
    include("../vencedor/createVencedor.php");  
    ?>
   
   
   
     