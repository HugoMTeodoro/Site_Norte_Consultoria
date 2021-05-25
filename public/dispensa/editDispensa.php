<?php
include("../Template/header.php");
include_once("../../data/connection.php");
include("../Login/valida.php");


//$id = $_POST["id"];
$codigo = $_POST["codigo"];
$tipo = $_POST["tipo"];
$action = $_POST["action"];

$sql = "SELECT * FROM dispensa WHERE codigo_processo = '" . $codigo . "'";
$resultado = $connection->query($sql);
$dispensa = $resultado->fetch_assoc();



?>
<br>

<div class="form">
    <form action="updateDispensa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
        <h3>Editar</h3>

        <div class="buttons">
            
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
            <p align="right">
  
            <a href="#vencedores" class="btn btn-primary">Vencedores </a>
            <a href="#aditivo" class="btn btn-primary" >Aditivo</a>
            
            <a href="#consideracoes" class="btn btn-primary">Considerações</a>

            </p>
      
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Id da dispensa</span>
            </div>

            <input type="number" name="dispensaId" class="form-control input-sm" id="dispensaId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["id_dispensa"] ?>" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
            </div>
            <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["exercicio"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
            </div>
            <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["num_processo"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Nº Dispensa</span>
            </div>
            <input type="number" name="numDispensa" class="form-control" id="numDispensa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["num_dispensa"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Inciso</span>
            </div>
            <select class="form-select" name="inciso" id="inciso">
                <option value="-1" selected>Nenhum</option>
                <?php

                $sqlQuery = "SELECT * FROM inciso ORDER BY inciso";

                $inciso = $connection->query($sqlQuery);

                if ($inciso->num_rows > 0) {

                    while ($row = $inciso->fetch_assoc()) {
                        if ($dispensa["inciso"] === $row["inciso"]) {
                ?>
                            <option value="<?php echo $row["inciso"] ?>" selected>
                                <?php echo $row["inciso"]  ?>
                            </option>
                        <?php
                        } else {
                        ?>
                            <option value="<?php echo $row["inciso"] ?>">
                                <?php echo $row["inciso"]  ?>
                            </option>

                            }
                            }
                            ?>



                <?php
                        }
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
            <?php
                if ($dispensa["emergencia"] == "Não") {
                ?>
                    <option value="Não" selected>
                        <?php echo "Não"  ?>
                    </option>
                    <?php
                } else {
                ?>
                    <option value="Não">
                        <?php echo "Não"  ?>
                    </option>
                <?php
                } if ($dispensa["emergencia"] == "Sim"){
                ?>
                    <option value="Sim" selected>
                        <?php echo "Sim"  ?>
                    </option>
                    <?php
                } else {
                ?>
                    <option value="Sim">
                        <?php echo "Sim"  ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Dispensa para atender uma ordem judicial?</span>
            </div>
            <select class="form-select" name="tipoJudicial" id="tipoJudicial">
                <?php
                if ($dispensa["judicial"] == "Não") {
                ?>
                    <option value="Não" selected>
                        <?php echo "Não"  ?>
                    </option>
                    <?php
                } else {
                ?>
                    <option value="Não">
                        <?php echo "Não"  ?>
                    </option>
                <?php
                } if ($dispensa["judicial"] == "Sim"){
                ?>
                    <option value="Sim" selected>
                        <?php echo "Sim"  ?>
                    </option>
                    <?php
                } else {
                ?>
                    <option value="Sim">
                        <?php echo "Sim"  ?>
                    </option>
                <?php
                }
                ?>

            </select>
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["objeto"]?> 
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
                        if ($dispensa["categoria"] === $row["categoria"]) {

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
            <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_inicio"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data de Ratificação</span>
            </div>
            <input type="date" name="dater" class="form-control" id="dater" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_ratificacao"] ?>">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data da portaria nomeando a comissão</span>
            </div>
            <input type="date" name="datep" class="form-control" id="datep" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_portaria_comissao"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
            </div>
            <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_solicitacao_compras_servicos"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
            </div>
            <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_preco_estimativo"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data da sessao</span>
            </div>
            <input type="date" name="datesessao" class="form-control" id="datesessao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["dt_sessao"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
            </div>
            <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_autorizacao_abertura"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data da abertura do processo</span>
            </div>
            <input type="date" name="dateabertura" class="form-control" id="dateabertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["dt_abertura"] ?>">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
            </div>
            <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_autuacao"] ?>">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <textarea name="txtEspecificacao" id="txtEspecificacao" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["especificacao"]?> 
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <textarea name="txtEnquadramento" id="txtEnquadramento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["enquadramento"]?> 
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <textarea name="txtMinuta" id="txtMinuta" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["minuta"]?> 
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
            </div>
            <input type="date" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_proposta_favorecido"] ?>">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <textarea name="txtHabilitacao" id="txtHabilitacao" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["documento_habilitacao"]?> 
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data ata de dispensa</span>
            </div>
            <input type="date" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_ata"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
            </div>
            <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_parecer_juridico"] ?>">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
            </div>
            <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_contrato_firmado"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da dispensa</span>
            </div>
            <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_publicacao"] ?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data de última pesquisa de preço</span>
            </div>
            <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["dt_pesquisa"] ?>">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["apostilamento"]?> 
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <textarea name="txtCopias" id="txtCopias" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["copia_notas"]?> 
            </div>

      

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'></textarea> <?php echo $dispensa["observacoes"]?> 
            </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
            </div>
            <input type="datetime-local" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $dispensa["data_lancamento"] ?>">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Porcentagem de aditivo permitida</span>
                </div>
                <input oninput="v_ = this.value; if(v_.length > 5){ this.value = v_.slice(0, 5); }" onblur="v_ = this.value; if(!~v_.indexOf('.')){ vl_ = v_.length; z_ = vl_ == 1 ? '0.00' : ( vl_ == 3 ? '0' : (vl_ == 2 ? '00' : ''));this.value = v_.length < 5 && v_ != '100' ? (((v_[0] ? v_[0] : '')+(v_[1] ? v_[1]+'.' : '')+(v_[2] ? v_[2] : '')+(v_[3] ? v_[3] : '')+(v_[4] ? v_[4] : '')+z_)):('100.00')};" type="number" id="numPorcent" name="numPorcent" step=".01" min=".01" max="100" value="<?php echo $dispensa["porcentagem"] ?>">
            </div>



        <br>
        <div class="buttons">
            <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
            <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
            <input type="hidden" name="action" value="<?php echo $action ?>">

            <input type="submit" class="btn btn-success" value="Atualizar">
            <input type="reset" class="btn btn-danger" onclick="window.location.href='../dispensa/listDispensa.php'" value="Cancelar">

        </div>

    </form>

</div>

<section id="vencedores"></section>

<?php
include("../vencedor/createVencedor.php");
?>