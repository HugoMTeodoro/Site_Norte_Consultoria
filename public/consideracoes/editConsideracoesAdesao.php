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

$diag6 = '';
$diag7 = '';
$diag8 = '';
$diag9 = '';
$diag10 = '';
$diag11 = '';
$diag12 = '';
$diag13 = '';
$diag14 = '';

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
$booldiag14 = false;
$booldiag15 = false;

$sql = "SELECT *,
DATE_FORMAT(dt_orcamento,'%d/%m/%Y') as dataorc,
DATE_FORMAT(dt_solicitacaoo,'%d/%m/%Y') as datasolo,
DATE_FORMAT(dt_autorizacao,'%d/%m/%Y') as dataaut,
DATE_FORMAT(dt_solicitacao_empresa,'%d/%m/%Y') as datasolem,
DATE_FORMAT(dt_autorizacao_empresa,'%d/%m/%Y') as dataaute,
DATE_FORMAT(dt_autorizacao_abertura,'%d/%m/%Y') as dataauto,
DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataautua,
DATE_FORMAT(dt_parecer,'%d/%m/%Y') as datapar,
DATE_FORMAT(dt_ratificacao,'%d/%m/%Y') as datarat,
DATE_FORMAT(dt_publicacao,'%d/%m/%Y') as datapub,
DATE_FORMAT(dt_contrato_firmado,'%d/%m/%Y') as datacont,
DATE_FORMAT(dt_abertura,'%d/%m/%Y') as dataa,

DATEDIFF(dt_inicio, dt_solicitacao) as difini,
DATEDIFF(dt_ratificacao, dt_solicitacao) as difrat,
DATEDIFF(dt_portaria, dt_solicitacao) as difport,
DATEDIFF(dt_solicitacao, dt_solicitacao) as difsol,
DATEDIFF(dt_orcamento, dt_solicitacao) as diforc,
DATEDIFF(dt_solicitacaoo, dt_solicitacao) as difsoli,
DATEDIFF(dt_autorizacao, dt_solicitacao) as difauto,
DATEDIFF(dt_solicitacao_empresa, dt_solicitacao) as difsole,
DATEDIFF(dt_confirmacao, dt_solicitacao) as difconf,
DATEDIFF(dt_ata, dt_solicitacao) as difata,
DATEDIFF(dt_autorizacao_abertura, dt_solicitacao) as difauto,
DATEDIFF(dt_autuacao, dt_solicitacao) as difautu,
DATEDIFF(dt_ata_inexigibilidade, dt_solicitacao) as difatain,
DATEDIFF(dt_parecer, dt_solicitacao) as difpar,
DATEDIFF(dt_publicacao, dt_solicitacao) as difpub,
DATEDIFF(dt_contrato_firmado, dt_solicitacao) as difcf,
DATEDIFF(dt_publicacao_contrato, dt_solicitacao) as difpubc,
DATEDIFF(dt_lancamento, dt_solicitacao) as diflanc,
DATEDIFF(dt_pesquisa, dt_solicitacao) as difpes,
DATEDIFF(dt_abertura, dt_solicitacao) as difab,
DATEDIFF(dt_autorizacao_empresa, dt_solicitacao) as difautoem,
DATEDIFF(dt_homologacao, dt_solicitacao) as difhomo,


DATEDIFF(dt_solicitacaoo, dt_orcamento) as difdiag2,
DATEDIFF(dt_solicitacaoo, dt_solicitacao) as difdiag3,
DATEDIFF(dt_autorizacao, dt_solicitacaoo) as difdiag4,
DATEDIFF(dt_solicitacao_empresa, dt_autorizacao) as difdiag6,
DATEDIFF(dt_autorizacao_empresa, dt_solicitacao_empresa) as difdiag7,
DATEDIFF(dt_autorizacao_abertura, dt_autorizacao_empresa) as difdiag8,
DATEDIFF(dt_autuacao, dt_autorizacao_abertura) as difdiag9,
DATEDIFF(dt_parecer, dt_ata_inexigibilidade) as difdiag10,
DATEDIFF(dt_ratificacao, dt_parecer) as difdiag11,
DATEDIFF(dt_publicacao, dt_ratificacao) as difdiag12,
DATEDIFF(dt_contrato_firmado, dt_ratificacao) as difdiag13,
DATEDIFF(dt_abertura, dt_autorizacao_abertura) as difdiag14

from adesao where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
        if ($exibir["difini"] < 0) {
            $diag1 = $diag1 . " Data de Inicio em " . ($exibir["difini"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difrat"] < 0) {
            $diag1 = $diag1 . " Data de ratificação em " . ($exibir["difrat"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difport"] < 0) {
            $diag1 = $diag1 . " Data da portaria nomeando a comissão " . ($exibir["difport"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difsol"] < 0) {
            $diag1 = $diag1 . " Data de solicitação de compras/serviços " . ($exibir["difsol"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["diforc"] < 0) {
            $diag1 = $diag1 . " Data do orçamento " . ($exibir["diforc"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difsoli"] < 0) {
            $diag1 = $diag1 . " Data de solicitação ao órgão realizador " . ($exibir["difsoli"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difauto"] < 0) {
            $diag1 = $diag1 . " Data de autorização da empresa adjudicatária " . ($exibir["difauto"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difsole"] < 0) {
            $diag1 = $diag1 . " Data de solicitação à empresa adjudicatária " . ($exibir["difsole"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difconf"] < 0) {
            $diag1 = $diag1 . " Data de confirmação de autenticidade  " . ($exibir["difconf"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difata"] < 0) {
            $diag1 = $diag1 . " Data de ata de resolução da carona " . ($exibir["difata"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difauto"] < 0) {
            $diag1 = $diag1 . " Data de autorização de abertura do processo " . ($exibir["difauto"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difautu"] < 0) {
            $diag1 = $diag1 . " Data de autuação " . ($exibir["difautu"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difatain"] < 0) {
            $diag1 = $diag1 . " Data ata de inexigibilidade " . ($exibir["difatain"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difpar"] < 0) {
            $diag1 = $diag1 . " Data do parecer jurídico " . ($exibir["difpar"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difpub"] < 0) {
            $diag1 = $diag1 . " Data de publicação da inexibilidade " . ($exibir["difpub"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difcf"] < 0) {
            $diag1 = $diag1 . " Data contrato firmado " . ($exibir["difcf"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difpubc"] < 0) {
            $diag1 = $diag1 . " Data de publicação do contrato" . ($exibir["difpubc"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        
        
        if ($exibir["difpes"] < 0) {
            $diag1 = $diag1 . " Data de pesquisa " . ($exibir["difpes"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difab"] < 0) {
            $diag1 = $diag1 . " Data de abertura " . ($exibir["difab"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difautoem"] < 0) {
            $diag1 = $diag1 . " Data da autorização da empresa" . ($exibir["difautoem"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
        if ($exibir["difhomo"] < 0) {
            $diag1 = $diag1 . " Data de homologação" . ($exibir["difhomo"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        

        if ($exibir["difdiag2"] < 0) {
            $diag2 = $diag2 . "Excedeu a data de solicitacao ao orgao realizador em " . $exibir["difdiag2"] * -1 . " dias";
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

        if ($exibir["difdiag7"] < 0) {
            $diag7 = $diag7 . "Essa data foi anterior a solicitacao à empresa em " . $exibir["difdiag7"] . " dias";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] < 0) {
            $diag8 = $diag8 . "Essa data foi anterior a autorização da empresa adjudicatária em " . $exibir["difdiag8"] * -1 . " dias";
            $booldiag8 = true;
        }
        if ($exibir["difdiag9"] < 0) {
            $diag9 = $diag9 . "Essa data foi anterior a autorização de abertura em " . $exibir["difdiag9"] * -1 . " dias";
            $booldiag9 = true;
        }
        if ($exibir["difdiag10"] < 0) {
            $diag10 = $diag10 . "Essa data foi anterior a Ata de adesao em " . $exibir["difdiag10"] * -1 . " dias";
            $booldiag10 = true;
        }
        if ($exibir["difdiag11"] < 0) {
            $diag11 = $diag11 . "Essa data foi anterior ao parecer juridico em " . $exibir["difdiag11"] * -1 . " dias";
            $booldiag11 = true;
        }
        if ($exibir["difdiag12"] > 8) {
            $diag12 = $diag12 . "Essa data foi posterior a ratificacao em " . $exibir["difdiag12"] . " dias, quando permitido apenas 8 dias (art. 26, Lei 8.666/93)";
            $booldiag12 = true;
        }
        if ($exibir["difdiag13"] < 0) {
            $diag13 = $diag13 . "Essa data foi anterior a Ratificacao em " . $exibir["difdiag13"] * -1 . " dias";
            $booldiag13 = true;
        }
        if ($exibir["difdiag14"] < 0) {
            $diag14 = $diag14 . "Essa data foi anterior a autorizacao para abertura em " . $exibir["difdiag14"] * -1 . " dias";
            $booldiag14 = true;
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
                <form action="../consideracoes/insertConsideracoesAdesao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conSolicO" class="form-control" id="conSolicO" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conSolicO"] ?></textarea>

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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAtori" class="form-control" id="conAtori" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAtori"] ?></textarea>

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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conSolE" class="form-control" id="conSolE" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conSolE"] ?></textarea>

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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAut" class="form-control" id="conAut" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAut"] ?></textarea>

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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAuto" class="form-control" id="conAuto" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAuto"] ?></textarea>

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
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAutuacao" class="form-control" id="conAutuacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAutuacao"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag9 . "." ?></p>
                    <?php
                    }
                    if ($booldiag10) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Parecer jurídico <br> <?php echo $exibir["datapar"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conParec" class="form-control" id="conParec" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conParec"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag10 . "." ?></p>
                    <?php
                    }
                    if ($booldiag11) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Ratificação <br> <?php echo $exibir["datarat"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conRat" class="form-control" id="conRat" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conRat"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag11 . "." ?></p>
                    <?php
                    }
                    if ($booldiag12) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Publicação <br> <?php echo $exibir["datapub"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPub" class="form-control" id="conPub" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPub"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag12 . "." ?></p>
                    <?php
                    }
                    if ($booldiag13) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Contrato firmado <br> <?php echo $exibir["datacont"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conFir" class="form-control" id="conFir" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conFir"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag13 . "." ?></p>
                    <?php
                    }
                    if ($booldiag14) {
                        ?>
                            <div class="input-group mb-3">
    
                                <div class="input-group-prepend">
    
                                    <span class="input-group-text" id="inputGroup-sizing-default">Abertura do processo <br> <?php echo $exibir["dataa"] ?></span>
                                </div>
                                <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAb" class="form-control" id="conAb" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAb"] ?></textarea>
    
                            </div>
                            <p class="formato"><?php echo $diag14 . "." ?></p>
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
        <br>
        <br>
        
        </html>