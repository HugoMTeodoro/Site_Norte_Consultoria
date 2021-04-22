<?php
include("../../data/connection.php");
include("../Template/header.php");
$sql = "SELECT * FROM categoria";

$dadosOrgao = $connection->query($sql);

if ($dadosOrgao->num_rows > 0) {
?>
     
    
    <div style="margin-left: 100px; margin-right: 100px;">

        <br>
        <div class="buttons">
            <a href="../categoria/createCategoria.php" class="btn btn-primary">Nova categoria</a>
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
                    <td><?php echo $exibir["categoria"] ?></td>


                    <td>
                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteCategoria.php?id=<?php echo $exibir["id_categoria"] ?>" style="text-decoration: none; color: white"> Excluir </a>
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
            <a href="../categoria/createCategoria.php" class="btn btn-primary">Nova categoria</a>
        </div>

     </div>
     <?php
}
?>