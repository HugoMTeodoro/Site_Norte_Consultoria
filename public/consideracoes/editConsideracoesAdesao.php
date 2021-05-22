<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Template/css.html");

//comentar
//$codigo = 'dispP.M. SAO JOAO NEPOMUCENO___';
//$tipo = 'dispensa';
$diag1 = '';
$diag2 = '';
$diag3 = '';
$diag4 = '';

$diag6 = '';
$diag7 = '';
$diag8 = '';
$diag9 = '';
$diag10 = '';
$diag11 = '';
$diag12 = '';
$diag13 = '';

$booldiag1 = false;
$booldiag2 = false;
$booldiag3 = false;
$booldiag4 = false;

$booldiag6 = false;
$booldiag7 = false;
$booldiag8 = false;
$booldiag9 = false;
$booldiag10 = false;
$booldiag11 = false;
$booldiag12 = false;
$booldiag13 = false;

$sql = "SELECT *,
DATE_FORMAT(dt_orcamento,'%d/%m/%Y') as dataorc,
DATE_FORMAT(dt_solicitacaoo,'%d/%m/%Y') as datasolo,
DATE_FORMAT(dt_autorizacao,'%d/%m/%Y') as dataaut,
DATE_FORMAT(dt_solicitacao_empresa,'%d/%m/%Y') as datasolem,
DATE_FORMAT(dt_autorizacao_empresa,'%d/%m/%Y') as dataaute,
DATE_FORMAT(dt_autorizacao_abertura,'%d/%m/%Y') as dataauto,
DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataautua,
DATEDIFF(dt_solicitacaoo, dt_orcamento) as difdiag2,
DATEDIFF(dt_solicitacaoo, dt_solicitacao) as difdiag3,
DATEDIFF(dt_autorizacao, dt_solicitacaoo) as difdiag4,
DATEDIFF(dt_solicitacao_empresa, dt_autorizacao) as difdiag6,
DATEDIFF(dt_autorizacao_empresa, dt_solicitacao_empresa) as difdiag7,
DATEDIFF(dt_autorizacao_abertura, dt_autorizacao_empresa) as difdiag8,
DATEDIFF(dt_autuacao, dt_autorizacao_abertura) as difdiag9,
DATEDIFF(dt_parecer, dt_ata) as difdiag10,
DATEDIFF(dt_ratificacao, dt_parecer) as difdiag11,
DATEDIFF(dt_publicacao, dt_ratificacao) as difdiag12,
DATEDIFF(dt_contrato_firmado, dt_homologacao) as difdiag13

from adesao where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
       
        if ($exibir["difdiag2"] < 0) {
            $diag2 = $diag2 . "Excedeu a data de solicitacao ao orgao realizador em " . $exibir["difdiag2"]*-1 . " dias";
            $booldiag2 = true;
        }
        if ($exibir["difdiag3"] < 0) {
            $diag3 = $diag3 . "Essa data foi anterior à  solicitação de compras em " . ($exibir["difdiag3"] * -1) . " dias";
            $booldiag3 = true;
        }
        if ($exibir["difdiag4"] < 0) {
            $diag4 = $diag4 . "Essa data foi anterior à  data de solicitacao ao orgao em " . ($exibir["difdiag4"] * -1) . " dias";
            $booldiag4 = true;
        }
        if ($exibir["difdiag6"] < 0) {
            $diag6 = $diag6 . "Essa data foi anterior ao autorizacao do orgao realizador em " . ($exibir["difdiag6"] * -1) . " dias";
            $booldiag6 = true;
        }

        if ($exibir["difdiag7"] <0) {
            $diag7 = $diag7 . "Essa data foi anterior a solicitacao à empresa em " . $exibir["difdiag7"] . " dias";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] <0) {
            $diag8 = $diag8 . "Essa data foi anterior a autorização da empresa adjudicatária em " . $exibir["difdiag8"]*-1 . " dias";
            $booldiag8 = true;
        }
        if ($exibir["difdiag9"] <0) {
            $diag9 = $diag9 . "Essa data foi anterior a autorização de abertura em " . $exibir["difdiag9"]*-1 . " dias";
            $booldiag9 = true;
        }
        if ($exibir["difdiag10"] <0) {
            $diag10 = $diag10 . "Essa data foi anterior a Ata de adesao em " . $exibir["difdiag10"] . " dias";
            $booldiag10 = true;
        }
        if ($exibir["difdiag11"] <0) {
            $diag11 = $diag11 . "Essa data foi anterior ao parecer juridico em " . $exibir["difdiag11"] . " dias";
            $booldiag11 = true;
        }
        if ($exibir["difdiag12"] >8) {
            $diag12 = $diag12 . "Essa data foi posterior a ratificacao em " . $exibir["difdiag12"] . " dias, quando permitido apenas 8 dias (art. 26, Lei 8.666/93)";
            $booldiag12 = true;
        }
        if ($exibir["difdiag13"] >=0) {
            $diag13 = $diag13 . "Essa data foi anterior a Homologação em " . $exibir["difdiag13"] . " dias";
            $booldiag13 = true;
        }

?>

        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Considerações</title>
        </head>

        <body>
            <br>
            <br>


            <div class="form">
                <form action="../consideracoes/insertConsideracoesDisp.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
                    <h3>Considerações</h3>
                    <br>
                    <?php
                    if ($booldiag1) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Solicitacao de compras e servicos <br> <?php echo $exibir["datasol"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conSolic" class="form-control" id="conSolic" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conSolic"] ?></textarea>

                        </div>
                        <p class="formato">Essa deveria ser a primeira data. Houve desacordo nos seguintes campos:<?php echo $diag1 . "." ?></p>
                        

                    <?php

                    }
                    if ($booldiag2) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Data do preco estimado <br> <?php echo $exibir["dataorc"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPreco" class="form-control" id="conPreco" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPreco"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag2 . "." ?></p>
                    <?php
                    }
                    if ($booldiag3) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Solicitação ao Órgão Realizador do RP <br> <?php echo $exibir["datasolo"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAut" class="form-control" id="conAut" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAut"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag3 . "." ?></p>

                    <?php
                    }
                    if ($booldiag4) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Autorização do Órgão Realizador do RP <br> <?php echo $exibir["dataaut"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAtuacao" class="form-control" id="conAtuacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAtuacao"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag4 . "." ?></p>
                    <?php
                    }
                    if ($booldiag6) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Solicitação à empresa Adjudicatária <br> <?php echo $exibir["datasolem"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conRat" class="form-control" id="conRat" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conRat"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag6 . "." ?></p>
                    <?php
                    }
                    if ($booldiag7) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Autorização da empresa Adjudicatária <br> <?php echo $exibir["dataaute"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPub" class="form-control" id="conPub" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPub"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag7 . "." ?></p>
                    <?php
                    }
                    if ($booldiag8) {
                        ?>
                            <div class="input-group mb-3">
    
                                <div class="input-group-prepend">
    
                                    <span class="input-group-text" id="inputGroup-sizing-default">Autorização Abertura do Proc.: <br> <?php echo $exibir["dataauto"] ?></span>
                                </div>
                                <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPub" class="form-control" id="conPub" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPub"] ?></textarea>
    
                            </div>
                            <p class="formato"><?php echo $diag8 . "." ?></p>
                        <?php
                        }
                        if ($booldiag9) {
                            ?>
                                <div class="input-group mb-3">
        
                                    <div class="input-group-prepend">
        
                                        <span class="input-group-text" id="inputGroup-sizing-default">Autuação <br> <?php echo $exibir["dataautua"] ?></span>
                                    </div>
                                    <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPub" class="form-control" id="conPub" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPub"] ?></textarea>
        
                                </div>
                                <p class="formato"><?php echo $diag9 . "." ?></p>
                            <?php
                            }
                    ?>

                    <div class="buttons">
                        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                        <input type="hidden" name="action" value="<?php echo $action ?>">
                        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                        <input type="reset" class="btn btn-danger" onclick="window.location.href='../home/home.php'" value="Cancelar">

                    </div>




                </form>
            </div>
    <?php
    }
}
    ?>
        </body>

        </html>