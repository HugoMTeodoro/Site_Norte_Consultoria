    <?php

    include_once("../../data/connection.php");

    if (isset($_POST)) {
        $id = $_POST["dispensaId"];
        $exercicio = $_POST["txtExercicio"];
        $nProcesso = $_POST["numProcesso"];
        $nDispensa = $_POST["numDispensa"];
        $inciso = $_POST["inciso"];
        $objeto = $_POST["txtObjeto"];
        $categoria = $_POST["txtCategoria"];
        $dInicio = $_POST["datei"];
        $dRatificacao = $_POST["dater"];
        $dPortariaComissao = $_POST["datep"];
        $dSolicitacaoCompras = $_POST["dates"];
        $dOrcamento = $_POST["datepe"];
        $dAutorizacao = $_POST["datea"];
        $dAutuacao = $_POST["dateau"];
        $especificacao = $_POST["txtEspecificacao"];
        $enquadramento = $_POST["txtEnquadramento"];
        $minuta = $_POST["txtMinuta"];
        $dPropostaFavorecido = $_POST["dateProp"];
        $habilitacao = $_POST["txtHabilitacao"];
        $dAtaDispensa = $_POST["dateAta"];
        $dParecerJuridico = $_POST["dateParecer"];
        $dContratoFirmado = $_POST["dateCF"];
        $dPublicacaoDispensa = $_POST["datePublicacao"];
        $copiaNotas = $_POST["txtCopias"];
        $valorTotal = $_POST["numTotal"];
        $observacoes = $_POST["txtObservacoes"];
        $dLancamento = $_POST["dateLancamento"];
        $tipo = "dispensa";
        $action = $_POST["action"];
        $codigo_disp=$_POST["codigo"];

        $sql = "UPDATE dispensa
        SET exercicio = '" . $exercicio . "', " .
            "num_processo= '" . $nProcesso . "', " .
            "num_dispensa= '" . $nDispensa . "' ,  " .
            "inciso= '" . $inciso . "', " .
            "objeto= '" . $objeto . "' ,  " .
            "categoria= '" . $categoria . "' ,  " .
            "data_inicio= '" . $dInicio . "' ,  " .
            "data_ratificacao= '" . $dRatificacao . "', " .
            " data_portaria_comissao= '" . $dPortariaComissao . "', " .
            " data_solicitacao_compras_servicos= '" . $dSolicitacaoCompras . "', " .
            " data_preco_estimativo= '" . $dOrcamento . "', " .
            " data_autorizacao_abertura= '" . $dAutorizacao . "', " .
            " data_autuacao= '" . $dAutuacao . "', " .
            " especificacao_objeto= '" . $especificacao . "', " .
            "enquadramento= '" . $enquadramento . "', " .
            "minuta_contrato= '" . $enquadramento . "', " .
            "data_proposta_favorecido= '" . $dPropostaFavorecido . "', " .
            "documento_habilitacao= '" . $habilitacao . "', " .
            "data_ata= '" . $dAtaDispensa . "', " .
            "data_parecer_juridico= '" . $dParecerJuridico . "', " .
            "data_contrato_firmado= '" . $dContratoFirmado . "', " .
            "data_publicacao= '" . $dPublicacaoDispensa . "', " .
            "copia_empenho_compras_legais= '" . $copiaNotas . "', " .
            "valor_total= '" . $valorTotal . "', " .
            "observacoes= '" . $observacoes . "' ,  " .
            "data_lancamento= '" . $dLancamento . "'" .
            "WHERE id_dispensa = " . $id;



        $resultado = $connection->query($sql);

        if ($resultado) {


    ?>
            <form name="myform" action="<?php echo $action ?>" method="POST">
                <input type="hidden" name="codigo" value="<?php echo $codigo_disp ?>">
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">
            </form>

            <script>
                alert("Dispensa editada com sucesso");
                document.myform.submit();
            </script>
        <?php
        } else {
            echo $sql ?>

            <script>
                alert("Ocorreu um erro ao cadastrar a dispensa");
            </script>

    <?php
        }
    }

    ?>