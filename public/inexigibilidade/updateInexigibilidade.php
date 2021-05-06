<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
$id = $_POST["inexigibilidadeId"];
$exercicio = $_POST["txtExercicio"];
$numProcesso = $_POST["numProcesso"];
$numInexigibilidade = $_POST["numInexigibilidade"];
$txtObjeto = $_POST["txtObjeto"];
$txtCategoria = $_POST["txtCategoria"];
$datei = $_POST["datei"];
$txtp = $_POST["txtp"];
$dates = $_POST["dates"];
$datepe = $_POST["datepe"];
$datea = $_POST["datea"];
$dateau = $_POST["dateau"];
$txtEspecificacao = $_POST["txtEspecificacao"];
$txtEnquadramento = $_POST["txtEnquadramento"];
$txtMinuta = $_POST["txtMinuta"];
$dateAprov = $_POST["dateAprov"];
$dateProp = $_POST["dateProp"];
$txtHabilitacao = $_POST["txtHabilitacao"];
$dateAta = $_POST["dateAta"];
$dateParecer = $_POST["dateParecer"];
$dateRatificacao = $_POST["dateRatificacao"];
$dateCF = $_POST["dateCF"];
$datePublicacao = $_POST["datePublicacao"];
$txtCopias = $_POST["txtCopias"];
$txtCodReg = $_POST["txtCodReg"];
$numTotal = $_POST["numTotal"];
$txtObservacoes = $_POST["txtObservacoes"];
$dateLancamento = $_POST["dateLancamento"];

$sql = "UPDATE inexigibilidade
 SET exercicio = '".$exercicio."' ,  " .
"num_processo= '".$numProcesso."' ,  " .
"num_inexigibilidade= '".$numInexigibilidade."' ,  " .
"objeto= '".$txtObjeto."' ,  " .
"categoria= '".$txtCategoria."' ,  " .
"dt_inicio= '".$datei."' ,  " .
"dt_ratificacao= '".$dateRatificacao."' ,  " .
"portaria_nomeando= '".$txtp."' ,  " .
"dt_solicitacao= '".$dates."' ,  " .
"dt_orcamento= '".$datepe."' ,  " .
"dt_autuacao= '".$datea."' ,  " .
"dt_autorizacao= '".$dateau."' ,  " .
"especificacao= '".$txtEspecificacao."' ,  " .
"enquadramento= '".$txtEnquadramento."' ,  " .
"minuta= '".$txtMinuta."' ,  " .
"dt_aprovacao= '".$dateAprov."' ,  " .
"dt_proposta= '".$dateProp."' ,  " .
"documentos = '".$txtHabilitacao."' ,  " .
"dt_ata= '".$dateAta."' ,  " .
"dt_parecer_juridico= '".$dateParecer."' ,  " .
"dt_contrato_firmado= '".$dateCF."' ,  " .
"dt_publicacao= '".$datePublicacao."' ,  " .
"copia_notas = '".$txtCopias."' ,  " .
"codigo= '".$txtCodReg."' ,  " .
"valor_total= '".$numTotal."' ,  " .
"observacoes= '".$txtObservacoes."' ,  " .
"dt_lancamento= '".$dateLancamento."'" .
"WHERE id_inexigibilidade = " . $id;


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Inexigibilidade editada com sucesso");
        window.location = 'listInexigibilidade.php';
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Ocorreu um erro ao cadastrar inexigibilidade");
       
       
    </script>
    
<?php
}
}
?>