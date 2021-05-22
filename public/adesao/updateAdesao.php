<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
    $id = $_POST["adesaoId"];
    $exercicio = $_POST["txtExercicio"];
    $num_adesao = $_POST["numProcesso"];
    $num_inexigibilidade = $_POST["numInexigibilidade"];
    $objeto = $_POST["txtObjeto"];
    $categoria = $_POST["txtCategoria"];
    $dt_inicio = $_POST["datei"];
    $dt_ratificacao = $_POST["dateRatificacao"];
    $portaria = $_POST["datepo"];
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
    $txtCopias = $_POST["txtCopias"];
    $observacoes = $_POST["txtObservacoes"];
    $dLancamento = $_POST["dateLancamento"];
    $tipo = "inexigibilidade";
    $autadju=$_POST["dateautAdjudicataria"];
    $action = $_POST["action"];

$sql = "UPDATE adesao
 SET exercicio = '".$exercicio."',".
  "num_adesao = '".$num_adesao."',".
  "num_inexigibilidade = '".$num_inexigibilidade."',".
  "objeto = '".$objeto."',".
  "categoria = '".$categoria."',".
  "dt_inicio = '".$dt_inicio."',".
  "dt_ratificacao = '".$dt_ratificacao."',".
  "dt_portaria = '".$portaria."',".
  "dt_solicitacao = '".$dt_solicitacao."',".
  "dt_orcamento = '".$dt_orcamento."',".
  "dt_solicitacaoo = '".$dt_solicitacaoo."',".
  "dt_autorizacao = '".$dt_autorizacao."',".
  "dt_solicitacao_empresa = '".$dt_solicitacao_empresa."',".
  "verificacao = '".$verificacao."',".
  "documento = '".$documento."',".
  "dt_confirmacao = '".$dt_confirmacao."',".
  "dt_ata = '".$dt_ata."',".
  "dt_autorizacao_abertura = '".$dt_autorizacao_abertura."',".
  "dt_autuacao = '".$dt_autuacao."',".
  "dt_ata_inexigibilidade = '".$dt_ata_inexigibilidade."',".
  "dt_parecer = '".$dt_parecer."',".
  "dt_publicacao = '".$dt_publicacao."',".
  "dt_contrato_firmado = '".$dt_contrato_firmado."',".
  "dt_publicacao_contrato = '".$dt_contrato_firmado."',".
  "copia_notas= '".$txtCopias."' ," .
  "observacoes= '".$observacoes."' ," .
  "dt_lancamento= '".$dLancamento."' " .",".
  "dt_autorizacao_empresa='".$autadju."'".
"WHERE id_adesao = " . $id;


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("adesao editada com sucesso");
        window.location = 'listAdesao.php';
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Ocorreu um erro ao cadastrar a adesão");
       
       
    </script>
    
<?php
}
}
?>