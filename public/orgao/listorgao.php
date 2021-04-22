<?php
include("../../data/connection.php");
include("../Template/header.php");
$sql = "SELECT * FROM orgao";

$dadosConsulta = $connection->query($sql);

if ($dadosConsulta->num_rows > 0) {
?>
    <div style="margin-left: 100px; margin-right: 100px;">

        <br>
        <div class="buttons">
            <a href="../doctor/createDoctor.php" class="btn btn-primary">Novo órgão</a>
        </div>
        <br>

        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Nome</th>
            </tr>

            <?php
            while ($exibir = $dadosConsulta->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $exibir["nome_orgao"] ?></td>


                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" formmethod="get">
                            <a href="editDoctor.php?crm=<?php echo $exibir["nome_orgao"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>

                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteDoctor.php?crm=<?php echo $exibir["nome_orgao"] ?>" style="text-decoration: none; color: white"> Excluir </a>
                        </button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
} else {
    echo "Nenhum registro encontrado.";
}
?>