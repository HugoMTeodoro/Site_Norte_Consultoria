<?php
include_once("../vendor/autoload.php");

$num_processo=$_POST["num_processo"];
$num_dispensa=$_POST["num_dispensa"];
$exercicio=$_POST["exercicio"];
$orgao=$_POST["orgao"];
$objeto=$_POST["objeto"];
$observacoes=$_POST["observacoes"];



$autuacao=$_POST["autuacao"];
$ratificacao=$_POST["rat"];
$empresas=$_POST["empr"];
$conSolic = $_POST["conSolic"];
$conPreco = $_POST["conPreco"];
$conAut = $_POST["conAut"];
$conAtuacao = $_POST["conAtuacao"];
$conRat = $_POST["conRat"];
$conPub = $_POST["conPub"];
$conAb=$_POST["conAb"];
$conPar=$_POST["conPar"];
$empresas=substr($empresas,0,-2);
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$section->addText(
    "$orgao"
);
$section->addText(
    "$orgao"
);
$section->addText(
    "O processo foi autuado no dia $autuacao, tendo sido ratificado em $ratificacao cuja(s) adjudicatária(s) foi/foram a(s) empresa(s), $empresas. 
     Dos apontamentos levantados na análise do processo licitatório temos as seguintes considerações:
     
     "
);
if($conSolic!=""){
$section->addText(
    "$conSolic"
);
}
if($conPreco!=""){
$section->addText(
    "$conPreco"
);
}
if($conAut!=""){
$section->addText(
    "$conAut"
);
}
if($conAtuacao!=""){
$section->addText(
    "$conAtuacao"
);
}
if($conRat!=""){
$section->addText(
    "$conRat"
);
}
if($conPub!=""){
$section->addText(
    "$conPub"
);
}
if($conPar!=""){
$section->addText(
    "$conPar"
);
}
if($conAb!=""){
$section->addText(
    "$conAb"
);
}

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007', $download = true);
header("Content-Disposition: attachment; filename='The Truth.docx'");
$objWriter->save("php://output");

?>
