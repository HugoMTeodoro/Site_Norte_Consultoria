<?php include("../Template/header.php") ;
include("../Login/valida.php");?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>


<?php



include("../../data/connection.php");

$sql = "SELECT * FROM modalidade WHERE exercicio = $exer and orgao ='$orgaoa' and (pesquisa LIKE '%$usuarios%' or objeto LIKE '%$usuarios%') order by num_processo ";




$dadosModalidade = $connection->query($sql);

if ($dadosModalidade->num_rows > 0) {
?>
    <div class="form">




<div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
    <br>

    <br>
    <table class="table" style="text-align: center;">
        <tr>
            <th>Modalidade</th>
            <th>Objeto</th>
            <th></th>
        </tr>

        <?php
        while ($exibir = $dadosModalidade->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $exibir["pesquisa"] ?></td>
                <td><?php echo $exibir["objeto"] ?></td>

                <td>
                    <button type="button" class="btn btn-primary btn-sm">
                        <a href="../geracaoDeDocx/coletaModal.php?id=<?php echo $exibir["codigo_processo"] ?>" style="text-decoration: none; color: white" target="blank">Relatório</a>
                    </button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                        <a href="deleteModalidade.php?id=<?php echo $exibir["id_modalidade"] ?>" style="text-decoration: none; color: white" onclick="return confirm('Deseja mesmo apagar o processo?');"> Excluir </a>
                    </button>
                    <form name="editbutton" action="editModalidade.php" method="POST">
                        <input type="hidden" name="codigo" value="<?php echo $exibir["codigo_processo"] ?>">
                        <input type="hidden" name="action" value="../modalidade/editModalidade.php">

                        <br>
                        <input type="hidden" name="tipo" value="modalidade">
                        <input type="hidden" name="id" value="<?php echo $exibir["id_modalidade"] ?>">

                        <input type="submit" class="btn btn-success btn-sm" value="Editar">
                    </form>




                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</div>
<?php
} else {
    echo "Nenhum registro encontrado.";
}
?>

<?php
error_reporting(0);
?>