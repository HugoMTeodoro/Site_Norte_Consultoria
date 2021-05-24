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


$sql = "SELECT *,


DATE_FORMAT(dt_edital,'%d/%m/%Y') as dataed,
DATE_FORMAT(dt_abertura,'%d/%m/%Y') as dataabe,
DATE_FORMAT(dt_nomeacao,'%d/%m/%Y') as datanom,
DATE_FORMAT(dt_solicitacao,'%d/%m/%Y') as datasol,
DATE_FORMAT(dt_orcamento,'%d/%m/%Y') as dataorc,
DATE_FORMAT(dt_autorizacao,'%d/%m/%Y') as dataauto,
DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataautu,
DATE_FORMAT(dt_aprovacao,'%d/%m/%Y') as dataaprov,
DATE_FORMAT(dt_publicacao,'%d/%m/%Y') as datapub,
DATE_FORMAT(dt_credenciamento,'%d/%m/%Y') as datacred,
DATE_FORMAT(dt_ata_abertura,'%d/%m/%Y') as dataata,
DATE_FORMAT(dt_confirmacao,'%d/%m/%Y') as dataconf,
DATE_FORMAT(dt_adjudicacao,'%d/%m/%Y') as dataadju,
DATE_FORMAT(dt_homologacao,'%d/%m/%Y') as datahomo,
DATE_FORMAT(dt_contrato_firmado,'%d/%m/%Y') as datacf,
DATE_FORMAT(dt_publicacao_ata,'%d/%m/%Y') as datapubata,
DATE_FORMAT(dt_lancamento,'%d/%m/%Y') as datalanc,
DATE_FORMAT(dt_pesquisa,'%d/%m/%Y') as datapes,
DATE_FORMAT(dt_emissao,'%d/%m/%Y') as dataemi,
DATE_FORMAT(dt_aprov_minuta,'%d/%m/%Y') as dataaprovmin,
DATE_FORMAT(dt_sessao,'%d/%m/%Y') as datasess,
DATE_FORMAT(dt_parecer,'%d/%m/%Y') as dataparec,
DATE_FORMAT(dt_sessao,'%d/%m/%Y') as datasess,


DATEDIFF(dt_edital, dt_solicitacao) as difed,
DATEDIFF(dt_abertura, dt_solicitacao) as difab,
DATEDIFF(dt_nomeacao, dt_solicitacao) as difnom,
DATEDIFF(dt_solicitacao, dt_solicitacao) as difsol,
DATEDIFF(dt_orcamento, dt_solicitacao) as diforc,
DATEDIFF(dt_autorizacao, dt_solicitacao) as difauto,
DATEDIFF(dt_autuacao, dt_solicitacao) as difautu,
DATEDIFF(dt_aprovacao, dt_solicitacao) as difapro,
DATEDIFF(dt_publicacao, dt_solicitacao) as difpub,
DATEDIFF(dt_credenciamento, dt_solicitacao) as difcred,
DATEDIFF(dt_ata_abertura, dt_solicitacao) as difata,
DATEDIFF(dt_confirmacao, dt_solicitacao) as difconf,
DATEDIFF(dt_adjudicacao, dt_solicitacao) as difadju,
DATEDIFF(dt_homologacao, dt_solicitacao) as difhomo,
DATEDIFF(dt_contrato_firmado, dt_solicitacao) as difcont,
DATEDIFF(dt_publicacao_ata, dt_solicitacao) as difpubata,
DATEDIFF(dt_lancamento, dt_solicitacao) as diflanc,
DATEDIFF(dt_emissao, dt_solicitacao) as difemi,
DATEDIFF(dt_aprov_minuta, dt_solicitacao) as difaprov,
DATEDIFF(dt_sessao, dt_solicitacao) as difses,
DATEDIFF(dt_parecer, dt_solicitacao) as difpar,
DATEDIFF(dt_pesquisa, dt_solicitacao) as difpesq,



DATEDIFF(dt_orcamento, dt_abertura) as difdiag2,
DATEDIFF(dt_autorizacao, dt_solicitacao) as difdiag3,
DATEDIFF(dt_autuacao, dt_publicacao) as difdiag4,
DATEDIFF(dt_aprovacao, dt_publicacao) as difdiag6,
DATEDIFF(dt_publicacao, dt_emissao) as difdiag7,
DATEDIFF(dt_credenciamento, dt_abertura) as difdiag8,
DATEDIFF(dt_ata_abertura, dt_publicacao) as difdiag9,
DATEDIFF(dt_sessao, dt_parecer) as difdiag10,
DATEDIFF(dt_parecer, dt_homologacao) as difdiag11,
DATEDIFF(dt_contrato_firmado, dt_homologacao) as difdiag12,
DATEDIFF(dt_adjudicacao, dt_sessao) as difdiag13,
DATEDIFF(dt_abertura, dt_autorizacao) as difdiag14

from pregao where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {

        if ($exibir["difed"] < 0) {
            $diag1 = $diag1 . " Data edital em " . ($exibir["difed"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difab"] < 0) {
            $diag1 = $diag1 . " Data de abertura " . ($exibir["difab"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difnom"] < 0) {
            $diag1 = $diag1 . " Data de nomeação " . ($exibir["difnom"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difsol"] < 0) {
            $diag1 = $diag1 . " Data de solicitação " . ($exibir["difsol"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["diforc"] < 0) {
            $diag1 = $diag1 . " Data de orçamento " . ($exibir["difinicio"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difauto"] < 0) {
            $diag1 = $diag1 . " Data de autorização " . ($exibir["difauto"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difautu"] < 0) {
            $diag1 = $diag1 . " Data de autuação" . ($exibir["difautu"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difapro"] < 0) {
            $diag1 = $diag1 . " Data de aprovacão " . ($exibir["difapro"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difpub"] < 0) {
            $diag1 = $diag1 . " Data de publicação " . ($exibir["difpub"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difcred"] < 0) {
            $diag1 = $diag1 . " Data de credenciamento " . ($exibir["difcred"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difata"] < 0) {
            $diag1 = $diag1 . " Data de ata de abertura " . ($exibir["difata"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difconf"] < 0) {
            $diag1 = $diag1 . " Data de confirmação" . ($exibir["difconf"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difadju"] < 0) {
            $diag1 = $diag1 . " Data de adjudicação " . ($exibir["difadju"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difhomo"] < 0) {
            $diag1 = $diag1 . " Data de homologação " . ($exibir["difhomo"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difcont"] < 0) {
            $diag1 = $diag1 . " Data de contrato firmado" . ($exibir["difcont"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difpubata"] < 0) {
            $diag1 = $diag1 . " Data de publicação da ata " . ($exibir["difpubata"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["diflanc"] < 0) {
            $diag1 = $diag1 . " Data de lançamento " . ($exibir["diflanc"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difemi"] < 0) {
            $diag1 = $diag1 . " Data de emissão " . ($exibir["difemi"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difaprov"] < 0) {
            $diag1 = $diag1 . " Data de aprovação " . ($exibir["difaprov"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difses"] < 0) {
            $diag1 = $diag1 . " Data de sessão " . ($exibir["difses"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difpar"] < 0) {
            $diag1 = $diag1 . " Data parecer jurídico " . ($exibir["difpar"] * -1) . " dias, ";
            $booldiag1 = true;
        }

        if ($exibir["difpesq"] < 0) {
            $diag1 = $diag1 . " Data da ultima pesquisa de preco em " . ($exibir["difpesq"] * -1) . " dias, ";
            $booldiag1 = true;
        }
        
       
        if ($exibir["difdiag2"] > 0) {
            $diag2 = $diag2 . "Excedeu o dia da abertura em " . $exibir["difdiag2"] . " dias";
            $booldiag2 = true;
        }
        if ($exibir["difdiag3"] < 0) {
            $diag3 = $diag3 . "Essa data foi anterior à  solicitação de compras em " . ($exibir["difdiag3"] * -1) . " dias";
            $booldiag3 = true;
        }
        if ($exibir["difdiag4"] < 0) {
            $diag4 = $diag4 . "Essa data foi anterior à  data de autorização ao orgao em " . ($exibir["difdiag4"] * -1) . " dias";
            $booldiag4 = true;
        }
        if ($exibir["difdiag6"] > 0) {
            $diag6 = $diag6 . "Essa data foi posterior à publicação do edital " . ($exibir["difdiag6"] * 1) . " dias";
            $booldiag6 = true;
        }

        if ($exibir["difdiag7"] <0) {
            $diag7 = $diag7 . "Essa data foi anterior à emissão em " . $exibir["difdiag7"] * -1 . " dias";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] != 0) {
            $diag8 = $diag8 . "Essa data tem uma diferença de " . $exibir["difdiag8"] . " dias da abertura";
            $booldiag8 = true;
        }
        
        if ($exibir["difdiag10"] >0) {
            $diag10 = $diag10 . "Essa data é anterior à sessão " . $exibir["difdiag10"] . " dias";
            $booldiag10 = true;
        }
        if ($exibir["difdiag11"] <0) {
            $diag11 = $diag11 . "Essa data foi anterior ao parecer juridico em " . $exibir["difdiag11"] * -1 . " dias";
            $booldiag11 = true;
        }
        if ($exibir["difdiag12"] > 0) {
            $diag12 = $diag12 . "Essa data foi anterior a homologação em " . $exibir["difdiag12"] . " dias";
            $booldiag12 = true;
        }
        if ($exibir["difdiag13"] < 0) {
            $diag13 = $diag13 . "Essa data foi anterior a sessao em " . $exibir["difdiag13"]*-1 . " dias";
            $booldiag13 = true;
        }
        if ($exibir["difdiag14"] < 0) {
            $diag14 = $diag14 . "Essa data foi anterior a autorizacao para abertura em " . $exibir["difdiag14"]*-1 . " dias";
            $booldiag14 = true;
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
                <form action="../consideracoes/insertConsideracoesPregao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Data do preço estimado <br> <?php echo $exibir["dataorc"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPreco" class="form-control" id="conPreco" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPreco"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag2 . "." ?></p>
                    <?              
                    }
                    if ($booldiag3) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Autorização p/ Abertura do Processo <br> <?php echo $exibir["dataauto"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Autuação <br> <?php echo $exibir["dataautu"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Aprovação da Minutas do Edital e seus Anexos <br> <?php echo $exibir["dataaprov"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAprov" class="form-control" id="conAprov" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAprov"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag6 . "." ?></p>
                    <?php
                    }
                    if ($booldiag7) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Publicação do edital <br> <?php echo $exibir["datapub"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Data Credenciamento <br> <?php echo $exibir["datacred"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conCred" class="form-control" id="conCred" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conCred"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag8 . "." ?></p>
                    <?php
                    }
                    ?>

                    <?php /*
                    if ($booldiag9) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Data ata abertura <br> <?php echo $exibir["dataabe"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAta" class="form-control" id="conAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAta"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag9 . "." ?></p>
                    <?php
                    }*/
                    ?>

                    <?php
                    if ($booldiag10) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico <br> <?php echo $exibir["dataparec"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conPar" class="form-control" id="conPar" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conPar"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag10 . "." ?></p>
                    <?php
                    }
                    ?>

                    <?php
                    if ($booldiag11) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Homologação <br> <?php echo $exibir["datahomo"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conHomo" class="form-control" id="conHomo" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conHomo"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag11 . "." ?></p>
                    <?php
                    }
                    ?>

                    <?php

                    if ($booldiag12) {
                    ?>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado <br> <?php echo $exibir["datacf"] ?></span>
                            </div>
                            <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conFirm" class="form-control" id="conFirm" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conFirm"] ?></textarea>

                        </div>
                        <p class="formato"><?php echo $diag12 . "." ?></p>
                    <?php
                    }
                    if ($booldiag13) {
                        ?>
                            <div class="input-group mb-3">
    
                                <div class="input-group-prepend">
    
                                    <span class="input-group-text" id="inputGroup-sizing-default">Data adjudicacao <br> <?php echo $exibir["dataadju"] ?></span>
                                </div>
                                <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAdj" class="form-control" id="conAdj" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAdj"] ?></textarea>
    
                            </div>
                            <p class="formato"><?php echo $diag13 . "." ?></p>
                        <?php
                        }
                        if ($booldiag14) {
                            ?>
                                <div class="input-group mb-3">
        
                                    <div class="input-group-prepend">
        
                                        <span class="input-group-text" id="inputGroup-sizing-default">Abertura <br> <?php echo $exibir["dataabe"] ?></span>
                                    </div>
                                    <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conAb" class="form-control" id="conAb" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conAb"] ?></textarea>
        
                                </div>
                                <p class="formato"><?php echo $diag14 . "." ?></p>
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