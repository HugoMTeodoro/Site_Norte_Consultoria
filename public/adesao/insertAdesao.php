<?php

include_once("../../data/connection.php");

 
 $exercicio = $_POST["txtExercicio"];
 $num_adesao = $_POST["numProcesso"];
 $num_inexigibilidade = $_POST["numInexigibilidade"];
 $objeto = $_POST["txtObjeto"];
 $categoria = $_POST["txtCategoria"];
 $dt_inicio = $_POST["datei"];
 $dt_ratificacao = $_POST["dateRatificacao"];
 $portaria = $_POST["txtp"];
 $dt_solicitacao = $_POST["dates"];
 $dt_orcamento = $_POST["datepe"];
 $dt_solicitacaoo = $_POST["dateSolicitacaoRP"];
 $dt_autorizacao = $_POST["dateAutorizacaoRP"];
 $dt_solicitacao_empresa = $_POST["dateSolicitacaoAdjudicataria"];
 $verificacao = $_POST["txtVerificacao"];
 $documento = $_POST["txtDocAdjudicataria"];
 $dt_confirmacao = $_POST["dateConfirmacaoAutenticidade"];
 $dt_ata = $_POST["dateAtaC"];
 $dt_autorizacao_abertura = $_POST["datea"];
 $dt_autuacao = $_POST["dateau"];
 $dt_ata_inexigibilidade = $_POST["dateAtaInexigibilidade"];
 $dt_parecer = $_POST["dateParecer"];
 $dt_publicacao = $_POST["datePublicacaoInexigibilidade"];
 $dt_contrato_firmado = $_POST["dateCF"];
 $dt_publicacao_contrato = $_POST["datePublicacaoContrato"];
 $copia_notas = $_POST["txtCopias"];
 $codigo = $_POST["txtCodReg"];
 $valor = $_POST["numTotal"];
 $observacoes = $_POST["txtObservacoes"];
 $dt_lancamento = $_POST["dateLancamento"];


 $sql = "INSERT INTO 
    adesao (exercicio, num_adesao, num_inexigibilidade, objeto, categoria, dt_inicio, dt_ratificacao, portaria, dt_solicitacao, dt_orcamento, dt_solicitacaoo, dt_autorizacao, dt_solicitacao_empresa, verificacao, documento, dt_confirmacao, dt_ata, dt_autorizacao_abertura, dt_autuacao, dt_ata_inexigibilidade, dt_parecer, dt_publicacao, dt_contrato_firmado, dt_publicacao_contrato, copia_notas, codigo, valor, observacoes, dt_lancamento)
    values ('$exercicio', '$num_adesao', '$num_inexigibilidade', '$objeto', '$categoria', '$dt_inicio', '$dt_ratificacao', '$portaria', '$dt_solicitacao', '$dt_orcamento', '$dt_solicitacaoo', '$dt_autorizacao', '$dt_solicitacao_empresa', '$verificacao', '$documento', '$dt_confirmacao', '$dt_ata', '$dt_autorizacao_abertura', '$dt_autuacao', '$dt_ata_inexigibilidade', '$dt_parecer', '$dt_publicacao', '$dt_contrato_firmado', '$dt_publicacao_contrato', '$copia_notas', '$codigo', '$valor', '$observacoes', '$dt_lancamento')";

 $resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Adesão cadastrada com sucesso");
        window.location = 'listAdesao.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a adesão");
        window.location = 'createAdesão.php';
       
    </script>
    
<?php
}

?>