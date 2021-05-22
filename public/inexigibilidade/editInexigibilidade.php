<?php include("../Template/header.php");
include("../../data/connection.php");

   

    $codigo = $_POST["codigo"];
    $tipo = $_POST["tipo"];
    $action = $_POST["action"];

    
    $sql = "SELECT * FROM inexigibilidade WHERE codigo_processo = '". $codigo . "'";
    
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
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#vencedores" class="btn btn-primary">Vencedores</a>
            <a href="#aditivo" class="btn btn-primary">Aditivo</a>
            
            <a href="#consideracoes" class="btn btn-primary">Considerações</a>
            </div>

            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da inexigibilidade</span>
                </div>
                <input type="number" name="inexigibilidadeId" class="form-control input-sm" id="inexgibilidadeId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["id_inexigibilidade"]?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["exercicio"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["num_processo"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Inexigibilidade</span>
                </div>
                <input type="number" name="numInexigibilidade" class="form-control" id="numInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["num_inexigibilidade"]?>">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["objeto"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria" >
                    <option value=-1 selected>Selecione a categoria</option>
                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                            if($inexigibilidade["categoria"] === $row["categoria"]) {
                            
                            ?>
                            <option value="<?php echo $row["categoria"] ?>" selected>
                                <?php echo $row["categoria"]  ?>
                            </option>
                            <?php
                            }else {
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
                <input type="date" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_inicio"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ratificação</span>
                </div>
                <input type="date" name="dateRatificacao" class="form-control" id="dateRatificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_ratificacao"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Portaria nomeando a comissão</span>
                </div>
                <input type="text" name="txtp" class="form-control" id="txtp" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["portaria_nomeando"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_solicitacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_orcamento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_autorizacao"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_autuacao"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <input type="text" name="txtEspecificacao" class="form-control" id="txtEspecificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["especificacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <input type="text" name="txtEnquadramento" class="form-control" id="txtEnquadramento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["enquadramento"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <input type="text" name="txtMinuta" class="form-control" id="txtMinuta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["minuta"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação da minuta</span>
                </div>
                <input type="date" name="dateAprov" class="form-control" id="dateAprov" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_aprovacao"]?>">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
                </div>
                <input type="date" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_proposta"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <input type="text" name="txtHabilitacao" class="form-control" id="txtHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["documentos"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de inexigibilidade</span>
                </div>
                <input type="date" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_ata"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_parecer_juridico"]?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_contrato_firmado"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da inexigibilidade</span>
                </div>
                <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_publicacao"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <input type="text" name="txtCopias" class="form-control" id="txtCopias" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["copia_notas"]?>">
            </div>

    

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <input type="text" name="txtObservacoes" class="form-control" id="txtObservacoes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["observacoes"]?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $inexigibilidade["dt_lancamento"]?>">
            </div>

            <br>    
            

            <br>
            <div class="buttons">
            <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
            <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
            <input type="hidden" name="action" value="<?php echo $action ?>">

            <input type="submit" class="btn btn-success" value="Atualizar">
            <input type="reset" class="btn btn-danger" value="Cancelar">

            </div>

            


            
        </form>
    </div>


</body>
</html>

<section id="vencedores"></section>
    <?php
    include("../vencedor/createVencedor.php");  
   
