<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
if (isset($_POST["action"])) {
} else {
?>
    <script>
        window.location = "../dispensa/listDispensa.php";
    </script>
<?php
}


$codigo = $_POST["codigo"];
$tipo = $_POST["tipo"];
$action = $_POST["action"];


$sql = "SELECT * FROM inexigibilidade WHERE codigo_processo = '" . $codigo . "'";

$resultado = $connection->query($sql);

$inexigibilidade = $resultado->fetch_assoc();





?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inexigibilidade</title>
</head>

<body>
    <br>
    <br>


    <div class="form">
        <form action="updateInexigibilidade.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Edit Inexigibilidade</h3>

            <div class="buttons">

                <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                <p align="right">

                <a href="../inexigibilidade/listInexigibilidade.php" class="btn btn-primary">Voltar </a>
                    <a href="#vencedores" class="btn btn-primary">Vencedores </a>
                    <a href="#aditivo" class="btn btn-primary">Aditivo</a>

                    <a href="#consideracoes" class="btn btn-primary">Considerações</a>

                </p>

            </div>

            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da inexigibilidade</span>
                </div>
                <input type="number" name="inexigibilidadeId" class="form-control input-sm" id="inexgibilidadeId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["id_inexigibilidade"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["exercicio"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["num_processo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Inexigibilidade</span>
                </div>
                <input type="number" name="numInexigibilidade" class="form-control" id="numInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["num_inexigibilidade"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["objeto"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria">
                    <option value=-1 selected>Selecione a categoria</option>
                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                            if ($inexigibilidade["categoria"] === $row["categoria"]) {

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
                <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_inicio"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ratificação</span>
                </div>
                <input type="date" name="dateRatificacao" class="form-control" id="dateRatificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_ratificacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da sessao</span>
                </div>
                <input type="date" name="dateSess" class="form-control" id="dateSess" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_sessao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Portaria nomeando a comissão</span>
                </div>
                <textarea name="txtp" id="txtp" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["portaria_nomeando"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_solicitacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_orcamento"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_autorizacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da abertura do processo</span>
                </div>
                <input type="date" name="dateabertura" class="form-control" id="dateabertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_abertura"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_autuacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <textarea name="txtEspecificacao" id="txtEspecificacao" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["especificacao"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <textarea name="txtEnquadramento" id="txtEnquadramento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["enquadramento"] ?>  </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <textarea name="txtMinuta" id="txtMinuta" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["minuta"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação da minuta</span>
                </div>
                <input type="date" name="dateAprov" class="form-control" id="dateAprov" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_aprovacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
                </div>
                <input type="date" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_proposta"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <textarea name="txtHabilitacao" id="txtHabilidade" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'><?php echo $inexigibilidade["documentos"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de inexigibilidade</span>
                </div>
                <input type="date" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_ata"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_parecer_juridico"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_contrato_firmado"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da inexigibilidade</span>
                </div>
                <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_publicacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de última pesquisa de preço</span>
                </div>
                <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_pesquisa"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["apostilamento"] ?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <textarea name="txtCopias" id="txtCopias" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'><?php echo $inexigibilidade["copia_notas"] ?> </textarea>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $inexigibilidade["observacoes"] ?> </textarea>
            </div>
            <?php
            $dc = trim($inexigibilidade["dt_lancamento"]);
            $data = date("Y-m-d", strtotime($dc));
            $hora = date("H:i", strtotime($dc));
            $datac = $data . "T" . $hora;
            ?>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dc?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Porcentagem de aditivo permitida</span>
                </div>
                <input oninput="v_ = this.value; if(v_.length > 5){ this.value = v_.slice(0, 5); }" onblur="v_ = this.value; if(!~v_.indexOf('.')){ vl_ = v_.length; z_ = vl_ == 1 ? '0.00' : ( vl_ == 3 ? '0' : (vl_ == 2 ? '00' : ''));this.value = v_.length < 5 && v_ != '100' ? (((v_[0] ? v_[0] : '')+(v_[1] ? v_[1]+'.' : '')+(v_[2] ? v_[2] : '')+(v_[3] ? v_[3] : '')+(v_[4] ? v_[4] : '')+z_)):('100.00')};" type="number" id="numPorcent" step=".01"  max="100" value="<?php echo $inexigibilidade["porcentagem"] ?>">
            </div>

            <br>


            <br>
            <div class="buttons">
                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">

                <input type="submit" class="btn btn-success" value="Atualizar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../inexigibilidade/listInexigibilidade.php'" value="Cancelar">

            </div>





        </form>
    </div>


</body>

</html>

<section id="vencedores"></section>
<?php
include("../vencedor/createVencedor.php");
