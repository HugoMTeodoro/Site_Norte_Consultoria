<?php
include("../Login/valida.php");
use PhpOffice\PhpWord\SimpleType\TextAlignment;

include_once("../vendor/autoload.php");

$num_processo = $_POST["num_processo"];
$num_dispensa = $_POST["num_dispensa"];
$exercicio = $_POST["exercicio"];
$orgao = $_POST["orgao"];
$objeto = $_POST["objeto"];
$observacoes = $_POST["observacoes"];

$autuacao = $_POST["autuacao"];
$ratificacao = $_POST["rat"];
$empresas = $_POST["empr"];

$conSolic = $_POST["conSolic"];
$conPreco = $_POST["conPreco"];
$conSolicO = $_POST["conSolicO"];
$conAtori = $_POST["conAtori"];
$conSolE = $_POST["conSolE"];
$conAut = $_POST["conAut"];
$conAuto = $_POST["conAuto"];
$conAutuacao = $_POST["conAutuacao"];
$conParec = $_POST["conParec"];
$conRat = $_POST["conRat"];
$conPub = $_POST["conPub"];
$conFir = $_POST["conFir"];
$conAb = $_POST["conAb"];
$conAd = $_POST["conAd"];


$empresas = substr($empresas, 0, -2);

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();


$paragraphStyleName = 'pStyle';
$phpWord->addParagraphStyle($paragraphStyleName, array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 100));




$section->addText(
    "$orgao",
    array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'name' => 'Arial', 'size' => 25, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 100),
    $paragraphStyleName

);
$section->addText(
    "Adesão Nº$num_dispensa/$exercicio - Processo: $num_processo/$exercicio",
    array('bold' => true, 'size' => 12, 'name' => 'Arial')
);
$section->addText(
    "       Objeto: $objeto",
    array('size' => 12, 'name' => 'Arial')
);
$section->addText(
    "       O processo foi autuado no dia $autuacao, tendo sido ratificado em $ratificacao cuja(s) adjudicatária(s) foi/foram a(s) empresa(s), $empresas.",
    array('size' => 12, 'name' => 'Arial')
);
$section->addText(
    "       Dos apontamentos levantados na análise do processo licitatório temos as seguintes considerações:",
    array('size' => 12, 'name' => 'Arial')
);
$section->addText(
    "$observacoes",
    array('size' => 12, 'name' => 'Arial')
);

if ($conSolic != "") {
    $section->addText(
        "$conSolic",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conPreco != "") {
    $section->addText(
        "$conPreco",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conSolicO != "") {
    $section->addText(
        "$conSolicO",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAtori != "") {
    $section->addText(
        "$conAtori",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conSolE != "") {
    $section->addText(
        "$conSolE",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAut != "") {
    $section->addText(
        "$conAut",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAuto != "") {
    $section->addText(
        "$conAuto",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAutuacao != "") {
    $section->addText(
        "$conAutuacao",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conParec != "") {
    $section->addText(
        "$conParec",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conRat != "") {
    $section->addText(
        "$conRat",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conPub != "") {
    $section->addText(
        "$conPub",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conFir != "") {
    $section->addText(
        "$conFir",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAb != "") {
    $section->addText(
        "$conAb",
        array('size' => 12, 'name' => 'Arial')
    );
}
if ($conAd != "") {
    $section->addText(
        "$conAd",
        array('size' => 12, 'name' => 'Arial')
    );
}



$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007', $download = true);
header("Content-Disposition: attachment; filename='The Truth.docx'");
$objWriter->save("php://output");
