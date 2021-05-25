<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Template/css.html");
include("../Login/valida.php");

//comentar
//$codigo = 'dispP.M. SAO JOAO NEPOMUCENO___';
//$tipo = 'dispensa';
$diag1 = '';
$diag2 = '';
$diag3 = '';
$diag4 = '';
$diag5='';
$diag6 = '';
$diag7 = '';
$diag8 = '';

$booldiag1 = false;
$booldiag2 = false;
$booldiag3 = false;
$booldiag4 = false;
$booldiag5 = false;
$booldiag6 = false;
$booldiag7 = false;
$booldiag8 = false;

$sql = "SELECT *,

DATE_FORMAT(data_solicitacao_compras_servicos,'%d/%m/%Y') as datasol,
DATE_FORMAT(data_preco_estimativo,'%d/%m/%Y') as datapreco,
DATE_FORMAT(data_autorizacao_abertura,'%d/%m/%Y') as dataaut,
DATE_FORMAT(data_autuacao,'%d/%m/%Y') as dataautuacao,
DATE_FORMAT(data_ratificacao,'%d/%m/%Y') as datarat,
DATE_FORMAT(data_publicacao,'%d/%m/%Y') as datapub,
DATE_FORMAT(data_parecer_juridico,'%d/%m/%Y') as datapar,
DATE_FORMAT(data_parecer_juridico,'%d/%m/%Y') as dataab,

DATEDIFF(data_inicio, data_solicitacao_compras_servicos) as difinicio,
DATEDIFF(dt_sessao, data_solicitacao_compras_servicos) as difsessao,
DATEDIFF(data_ratificacao, data_solicitacao_compras_servicos) as difrat,
DATEDIFF(data_preco_estimativo, data_solicitacao_compras_servicos) as difestim,
DATEDIFF(dt_abertura, data_solicitacao_compras_servicos) as difabert,
DATEDIFF(data_autuacao, data_solicitacao_compras_servicos) as difaut,
DATEDIFF(data_proposta_favorecido, data_solicitacao_compras_servicos) as difprop,
DATEDIFF(data_ata, data_solicitacao_compras_servicos) as difata,
DATEDIFF(data_parecer_juridico, data_solicitacao_compras_servicos) as difparecer,
DATEDIFF(data_contrato_firmado, data_solicitacao_compras_servicos) as difcont,
DATEDIFF(data_publicacao, data_solicitacao_compras_servicos) as difpub,
DATEDIFF(dt_pesquisa, data_solicitacao_compras_servicos) as difpesq,
DATEDIFF(data_portaria_comissao, data_solicitacao_compras_servicos) as difport,
DATEDIFF(data_autorizacao_abertura, data_solicitacao_compras_servicos) as difautor,


DATEDIFF(dt_abertura, data_preco_estimativo) as difdiag2,
DATEDIFF(data_autorizacao_abertura, data_solicitacao_compras_servicos) as difdiag3,
DATEDIFF(data_autuacao, data_autorizacao_abertura) as difdiag4,
DATEDIFF(data_parecer_juridico, dt_sessao) as difdiag5,
DATEDIFF(data_ratificacao, data_parecer_juridico) as difdiag6,
DATEDIFF(data_publicacao, data_ratificacao) as difdiag7,
DATEDIFF(dt_abertura, data_autorizacao_abertura) as difdiag8

from dispensa where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["difinicio"] < 0) {
            $diag1 = $diag1 . " Data de Inicio em " . ($exibir["difinicio"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difsessao"] < 0) {
            $diag1 = $diag1 . " Data da Sessao em " . ($exibir["difsessao"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difrat"] < 0) {
            $diag1 = $diag1 . "Data de ratificacao em " . ($exibir["difrat"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difestim"] < 0) {
            $diag1 = $diag1 . "Data de preco estimativo em " . ($exibir["difestim"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difabert"] < 0) {
            $diag1 = $diag1 . "Data de autorizacao de abertura em " . ($exibir["difabert"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difaut"] < 0) {
            $diag1 = $diag1 . "Data de autuacao em " . ($exibir["difaut"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difprop"] < 0) {
            $diag1 = $diag1 . "Data de proposta do favorecido em " . ($exibir["difprop"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difata"] < 0) {
            $diag1 = $diag1 . "Data da ata em " . ($exibir["difata"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difparecer"] < 0) {
            $diag1 = $diag1 . "Data do parecer juridico em " . ($exibir["difparecer"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difcont"] < 0) {
            $diag1 = $diag1 . "Data do contrato firmado em " . ($exibir["difcont"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        if ($exibir["difpub"] < 0) {
            $diag1 = $diag1 . "Data da publicacao em " . ($exibir["difpub"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difpesq"] < 0) {
            $diag1 = $diag1 . "Data da ultima pesquisa de preco em " . ($exibir["difpesq"] * -1) . " dias, ";
            $booldiag1 = true;
        }if ($exibir["difport"] < 0) {
            $diag1 = $diag1 . "Data da portaria da comissao em " . ($exibir["difport"] * -1) . " dias, ";
            $booldiag1 = true;
        }if ($exibir["difautor"] < 0) {
            $diag1 = $diag1 . "Data da autorizacao de abertura em " . ($exibir["difautor"] * -1) . " dias, ";
            $booldiag1 = true;
        }    

        if ($exibir["difdiag2"] < 0) {
            $diag2 = $diag2 . "Essa data Excedeu a data de abertura em " . $exibir["difdiag2"]*-1 . " dias";
            $booldiag2 = true;
        }
        if ($exibir["difdiag3"] < 0) {
            $diag3 = $diag3 . "Essa data foi anterior à  data de solicitação em " . ($exibir["difdiag3"] * -1) . " dias";
            $booldiag3 = true;
        }
        if ($exibir["difdiag4"] < 0) {
            $diag4 = $diag4 . "Essa data foi anterior à  data de autorizacao em " . ($exibir["difdiag4"] * -1) . " dias";
            $booldiag4 = true;
        }
        if ($exibir["difdiag5"] < 0) {
            $diag5 = $diag5 . "Essa data foi anterior à  data de sessao em " . ($exibir["difdiag5"] * -1) . " dias";
            $booldiag5 = true;
        }
        if ($exibir["difdiag6"] < 0) {
            $diag6 = $diag6 . "Essa data foi anterior ao parecer em " . ($exibir["difdiag6"] * -1) . " dias";
            $booldiag6 = true;
        }

        if ($exibir["difdiag7"] > 8 or $exibir["difdiag7"] < 0) {
            $diag7 = $diag7 . "Essa data entrou em desacordo com a ratificacao em " . $exibir["difdiag7"]. " dias, quando permitido apenas 8 dias apos a ratificacao (art. 26, Lei 8.666/93)";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] < 0) {
            $diag8 = $diag8 . "Essa data foi anterior ao autorizacao para abertura em " . $exibir["difdiag8"]*-1 . " dias";
            $booldiag8 = true;
        }
        if($exibir["valor_total"]*($exibir["porcentagem"]/100)<$exibir["valor_aditivo"]){
            $val=$exibir["valor_total"]*($exibir["porcentagem"]/100)-($exibir["valor_aditivo"]);
            $booldiag15=true;
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Data do preco estimado <br> <?php echo $exibir["datapreco"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Autorização p/ Abertura do Processo <br> <?php echo $exibir["dataaut"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Autuação <br> <?php echo $exibir["dataautuacao"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAtuacao" class="form-control" id="conAtuacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAtuacao"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag4 . "." ?></p>
                    <?php
                    }
                    if ($booldiag5) {
                        ?>
                            <div class="input-group mb-3">
    
                                <div class="input-group-prepend">
    
                                    <span class="input-group-text" id="inputGroup-sizing-default">Parecer <br> <?php echo $exibir["datapar"] ?></span>
                                </div>
                                <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPar" class="form-control" id="conPar" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPar"] ?></textarea>
    
                            </div>
                            <p class="formato"><?php echo $diag5 . "." ?></p>
                        <?php
                        }
                    if ($booldiag6) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Ratificação <br> <?php echo $exibir["datarat"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Publicação <br> <?php echo $exibir["datapub"] ?></span>
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
    
                                    <span class="input-group-text" id="inputGroup-sizing-default">Abertura <br> <?php echo $exibir["dataab"] ?></span>
                                </div>
                                <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAb" class="form-control" id="conAb" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAb"] ?></textarea>
    
                            </div>
                            <p class="formato"><?php echo $diag8 . "." ?></p>
                        <?php
                        }
                        if ($booldiag15) {
                            ?>
                                <div class="input-group mb-3">
        
                                    <div class="input-group-prepend">
        
                                        <span class="input-group-text" id="inputGroup-sizing-default">Valor aditivado <br> <?php echo $exibir["valor_aditivo"] ?></span>
                                    </div>
                                    <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAd" class="form-control" id="conAd" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAd"] ?></textarea>
        
                                </div>
                                <p class="formato">O valor limite de aditivos foi ultrapassado em <?php echo $val*-1?></p>
                            <?php
                            }
                    ?>

                    <div class="buttons">
                        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                        <input type="hidden" name="action" value="<?php echo $action ?>">
                        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                        
                    </div>




                </form>
            </div>
    <?php
    }
}
    ?>
        </body>

        </html>