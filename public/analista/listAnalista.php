<?php
include("../../data/connection.php");
include("../Template/header.php");
$sql = "SELECT * FROM analista";

$dadosOrgao = $connection->query($sql);

if ($dadosOrgao->num_rows > 0) {
?>
     
    
    <div style="margin-left: 100px; margin-right: 100px;">

        <br>
        <div class="buttons">
            <a href="../analista/createAnalista.php" class="btn btn-primary">Novo analista</a>
        </div>
        <br>

        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
            

            <?php
            while ($exibir = $dadosOrgao->fetch_assoc()) {
            ?>
                <tr></tr>
                <tr>
                    <td><?php echo $exibir["nome_analista"] ?></td>
                    <td>
                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteAnalista.php?id=<?php echo $exibir["id_analista"] ?>" style="text-decoration: none; color: white"> Excluir </a>
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
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
    <div class="buttons">
            <a href="../analista/createAnalista.php" class="btn btn-primary">Novo Analista</a>
        </div>

     </div>
     <?php
}
?>