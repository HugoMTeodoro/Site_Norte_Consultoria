<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Template/css.html");


$diag1 = '';
$diag2 = '';
$diag3 = '';
$diag4 = '';
$diag5 = '';
$diag6 = '';
$diag7 = '';
$diag8 = '';
$diag9 = '';


$booldiag1 = false;
$booldiag2 = false;
$booldiag3 = false;
$booldiag4 = false;
$booldiag5 = false;
$booldiag6 = false;
$booldiag7 = false;
$booldiag8 = false;
$booldiag9 = false;


$sql = "SELECT *,
DATE_FORMAT(dt_orcamento,'%d/%m/%Y') as dataorc,
DATE_FORMAT(dt_autorizacao,'%d/%m/%Y') as dataaut,
DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataautua,
DATE_FORMAT(dt_autuacao,'%d/%m/%Y') as dataaprov,
DATE_FORMAT(dt_publicacao,'%d/%m/%Y') as datapub,
DATE_FORMAT(dt_publicacao,'%d/%m/%Y') as dataata,
DATE_FORMAT(dt_publicacao,'%d/%m/%Y') as datapar,
DATE_FORMAT(dt_contrato_firmado,'%d/%m/%Y') as datacont,
DATE_FORMAT(dt_homologacao,'%d/%m/%Y') as datahomol,
DATE_FORMAT(dt_adjudicacao,'%d/%m/%Y') as dataadj,

DATEDIFF(dt_abertura, dt_orcamento) as difdiag2,
DATEDIFF(dt_autorizacao, dt_solicitacao) as difdiag3,
DATEDIFF(dt_autuacao, dt_autorizacao) as difdiag4,
DATEDIFF(dt_publicacao, dt_emissao) as difdiag5,
DATEDIFF(dt_publicacao, dt_aprovacao) as difdiag6,
DATEDIFF(dt_ata_julgamento, dt_abertura) as difdiag7,
DATEDIFF(dt_parecer_juridico, dt_sessao) as difdiag8,
DATEDIFF(dt_contrato_firmado, dt_homologacao) as difdiag9


from modalidade where codigo_processo='$codigo';";

$dados = $connection->query($sql);
if ($dados->num_rows > 0) {
    while ($exibir = $dados->fetch_assoc()) {
       
        if ($exibir["difdiag2"] < 0) {
            $diag2 = $diag2 . "Excedeu a data de abertura em " . $exibir["difdiag2"]*-1 . " dias";
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

        if ($exibir["difdiag5"] < 0) {
            $diag5 = $diag5 . "Essa data foi anterior à  data de emissao em " . ($exibir["difdiag5"] * -1) . " dias";
            $booldiag5 = true;
        }

        if ($exibir["difdiag7"] <0) {
            $diag7 = $diag7 . "Essa data foi anterior a solicitacao à empresa em " . $exibir["difdiag7"]*-1 . " dias";
            $booldiag7 = true;
        }
        if ($exibir["difdiag8"] >0) {
            $diag8 = $diag8 . "Essa data foi anterior a sessao em " . $exibir["difdiag8"] . " dias";
            $booldiag8 = true;
        }
        if ($exibir["difdiag9"] <0) {
            $diag9 = $diag9 . "Essa data foi anterior a homolagacao em " . $exibir["difdiag9"]*-1 . " dias";
            $booldiag9 = true;
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

                        <span class="input-group-text" id="inputGroup-sizing-default">Autuação <br> <?php echo $exibir["dataautua"] ?></span>
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

                        <span class="input-group-text" id="inputGroup-sizing-default">Aprovação da minuta do Edital e Anexos <br> <?php echo $exibir["dataaprov"] ?></span>
                    </div>
                    <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conRat" class="form-control" id="conRat" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conRat"] ?></textarea>

                </div>
                <p class="formato"><?php echo $diag6 . "." ?></p>
            <?php
            }
            if ($booldiag5) {
                ?>
                    <div class="input-group mb-3">
    
                        <div class="input-group-prepend">
    
                            <span class="input-group-text" id="inputGroup-sizing-default">Publicação do Edital <br> <?php echo $exibir["datapub"] ?></span>
                        </div>
                        <textarea oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1' type="text" name="conRat" class="form-control" id="conRat" aria-label="Default" aria-describedby="inputGroup-sizing-default" rows="2"><?php echo $exibir["conRat"] ?></textarea>
    
                    </div>
                    <p class="formato"><?php echo $diag5 . "." ?></p>
                <?php
                }
            if ($booldiag7) {
            ?>
                <div class="input-group mb-3">

                    <div class="input-group-prepend">

                        <span class="input-group-text" id="inputGroup-sizing-default">Ata de Julgamento <br> <?php echo $exibir["dataata"] ?></span>
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

                            <span class="input-group-text" id="inputGroup-sizing-default">Parecer jurídico <br> <?php echo $exibir["datapar"] ?></span>
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

                                <span class="input-group-text" id="inputGroup-sizing-default">Contrato firmado <br> <?php echo $exibir["datacont"] ?></span>
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