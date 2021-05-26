<?php include("../Template/header.php");
include("../Login/valida.php");
?>
<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>


<?php



include("../../data/connection.php");

$sql = "SELECT * FROM dispensa where orgao='$orgaoa' and exercicio ='$exer' order by num_dispensa";
$dadosDispensa = $connection->query($sql);

if ($dadosDispensa->num_rows > 0) {
?>
    <div class="form">




        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
            <br>

            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Dispensa</th>
                    <th>Objeto</th>
                    <th></th>
                </tr>

                <?php
                while ($exibir = $dadosDispensa->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $exibir["pesquisa"] ?></td>
                        <td><?php echo $exibir["objeto"] ?></td>

                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="../geracaoDeDocx/coletaDisp.php?id=<?php echo $exibir["codigo_processo"] ?>" style="text-decoration: none; color: white" target="blank">Relatorio</a>
                            </button>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                <a href="deleteDispensa.php?id=<?php echo $exibir["id_dispensa"] ?>" style="text-decoration: none; color: white" onclick="return confirm('Deseja mesmo apagar o processo?');"> Excluir </a>
                            </button>
                            <form name="editbutton" action="editDispensa.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $exibir["codigo_processo"] ?>">
                                <input type="hidden" name="action" value="../dispensa/editDispensa.php">

                                <br>
                                <input type="hidden" name="tipo" value="dispensa">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_dispensa"] ?>">

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