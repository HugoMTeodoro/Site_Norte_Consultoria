<?php include("../Template/header.php") ?>

<?php

include("../../data/connection.php");

$sql = "SELECT * FROM vencedor where codigo_processo='$codigo'";

$dadosVencedor = $connection->query($sql);

if ($dadosVencedor->num_rows > 0) {
?>
    <div class="form">




        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        <h3>Lista de vencedores</h3>
            <br>

            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Empresa</th>
                    <th>Valor</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>

                <?php
                while ($exibir = $dadosVencedor->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $exibir["nome_empresa"] ?></td>
                        <td><?php echo $exibir["valor"] ?></td>
                        <td><?php echo $exibir["codigo_processo"] ?></td>
                        <td>

                            <form name="deletebutton" action="../vencedor/deleteVencedor.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_vencedor"] ?>">
                                <input type="hidden" name="action" value="<?php echo $action ?>">
                                <input type="submit" class="btn btn-danger btn-sm" value="Excluir">
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
    ?>
    <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
    <?php
    echo "Nenhum registro encontrado.";
}
?>
    </div>

<?php
error_reporting(0);
?>