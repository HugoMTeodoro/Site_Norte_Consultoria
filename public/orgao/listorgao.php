<?php
include("../../data/connection.php");
include("../Template/header.php");
$sql = "SELECT * FROM orgao";

$dadosOrgao = $connection->query($sql);

if ($dadosOrgao->num_rows > 0) {
?>
     
    
    <div style="margin-left: 100px; margin-right: 100px;">

        <br>
        <div class="buttons">
            <a href="../orgao/createOrgao.php" class="btn btn-primary">Novo órgão</a>
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
                    <td><?php echo $exibir["nome_orgao"] ?></td>


                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" formmethod="get">
                            <a href="editOrgao.php?id=<?php echo $exibir["id_orgao"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>

                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteOrgao.php?id=<?php echo $exibir["id_orgao"] ?>" style="text-decoration: none; color: white"> Excluir </a>
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
            <a href="../orgao/createOrgao.php" class="btn btn-primary">Novo órgão</a>
        </div>

     </div>
     <?php
}
?>