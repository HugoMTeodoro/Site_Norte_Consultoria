<?php

include_once("../../data/connection.php");
include("../Login/valida.php");
if (isset($_POST)) {
    $id = $_POST["pregaoId"];
    $exercicio  = $_POST["txtExercicio"];
    $num_processo  = $_POST["numProcesso"];
    $tipo  = $_POST["txtPregao"];
    $numero  = $_POST["num"];
    $objeto  = $_POST["txtObjeto"];
    $registro  = $_POST["registro"];
    $categoria  = $_POST["txtCategoria"];
    $dt_edital  = $_POST["dateEdital"];
    $dt_abertura  = $_POST["dateAbertura"];
    $dt_nomeacao  = $_POST["dateNomeacao"];
    $dt_solicitacao  = $_POST["dates"];
    $dt_emissao  = $_POST["dateEmi"];
    $dt_orcamento  = $_POST["datepe"];
    $dt_autorizacao  = $_POST["datea"];
    $dt_autuacao  = $_POST["dateau"];
    $enquadramento  = $_POST["txtEnquadramento"];
    $edital  = $_POST["txtEdital"];
    $dt_aprovacao  = $_POST["dateAprov"];
    $minuta  = $_POST["txtMinuta"];
    $dt_publicacao  = $_POST["datePub"];
    $especificacao  = $_POST["txtEspecificacao"];
    $dt_credenciamento  = $_POST["dateCred"];
    $proposta_precos  = $_POST["numPreco"];
    $dt_ata_abertura  = $_POST["dateAberturaata"];
    $documento  = $_POST["documentos"];
    $dt_confirmacao  = $_POST["dateConfirmacao"];
    $prazo  = $_POST["datePrazoRec"];
    $dt_adjudicacao  = $_POST["dateAdjudicacao"];
    $dt_parecer  = $_POST["dateParecer"];
    $dt_homologacao  = $_POST["dateHomologacao"];
    $dt_contrato_firmado  = $_POST["dateContratoFirmado"];
    $dt_publicacao_ata  = $_POST["datePublicacaoAta"];
    $txtCopias = $_POST["txtCopias"];
    $observacoes = $_POST["txtObservacoes"];
    $dLancamento = $_POST["dateLancamento"];
    $tipo = "pregao";
    $action = $_POST["action"];
    $sessao = $_POST["datesessao"];
    $apostilamento = $_POST["txtApostilamento"];
    $dt_pesquisa = $_POST["datePesquisa"];
    $apostilamento = $_POST["txtApostilamento"];
    $dt_pesquisa = $_POST["datePesquisa"];
    $pesquisa ="Pregão"."/".$num_processo."/"."$exercicio";
    $porcentagem=$_POST["numPorcent"];


    $sql = "UPDATE pregao
 SET exercicio = '" . $exercicio . "'," .
        "num_processo = '" . $num_processo . "'," .
        "tipo = '" . $tipo . "'," .
        "numero = '" . $numero . "'," .
        "objeto = '" . $objeto . "'," .
        "registro = '" . $registro . "'," .
        "categoria = '" . $categoria . "'," .
        "dt_edital = '" . $dt_edital . "'," .
        "dt_abertura = '" . $dt_abertura . "'," .
        "dt_nomeacao = '" . $dt_nomeacao . "'," .
        "dt_solicitacao = '" . $dt_solicitacao . "'," .
        "dt_orcamento = '" . $dt_orcamento . "'," .
        "dt_autorizacao = '" . $dt_autorizacao . "'," .
        "dt_autuacao = '" . $dt_autuacao . "'," .
        "enquadramento = '" . $enquadramento . "'," .
        "edital = '" . $edital . "'," .
        "dt_aprovacao = '" . $dt_aprovacao . "'," .
        "minuta = '" . $minuta . "'," .
        "dt_publicacao = '" . $dt_publicacao . "'," .
        "dt_emissao = '" . $dt_emissao . "'," .
        "especificacao = '" . $especificacao . "'," .
        "dt_credenciamento = '" . $dt_credenciamento . "'," .
        "proposta_precos = '" . $proposta_precos . "'," .
        "dt_ata_abertura = '" . $dt_ata_abertura . "'," .
        "documento = '" . $documento . "'," .
        "dt_confirmacao = '" . $dt_confirmacao . "'," .
        "prazo = '" . $prazo . "'," .
        "dt_adjudicacao = '" . $dt_adjudicacao . "'," .
        "dt_parecer = '" . $dt_parecer . "'," .
        "dt_homologacao = '" . $dt_homologacao . "'," .
        "dt_contrato_firmado = '" . $dt_contrato_firmado . "'," .
        "dt_publicacao_ata = '" . $dt_publicacao_ata . "'," .
        "copia_notas= '" . $txtCopias . "' ," .
        "observacoes= '" . $observacoes . "' ," .
        "dt_lancamento= '" . $dLancamento . "' , " .
        "dt_pesquisa='$dt_pesquisa'" . "," .
        "apostilamento='$apostilamento'" . "," .
        "pesquisa='$pesquisa'" . "," .
        "porcentagem='$porcentagem'" . "," .
        "dt_sessao= '" . $sessao . "' " .
        "WHERE id_pregao = " . $id;
    $resultado = $connection->query($sql);

    if ($resultado) { ?>
        <script>
            alert("Pregão editado com sucesso");
            window.location = 'listPregao.php';
        </script>
    <?php
    } else {
        echo $sql; ?>
        <script>
            alert("Ocorreu um erro ao cadastrar o pregão");
        </script>

<?php
    }
}
