<?php
include("../../data/connection.php");
include("../Template/header.php");
include("../Login/valida.php");
$sql = "SELECT * FROM tipo_modalidade";

$dadosOrgao = $connection->query($sql);

if ($dadosOrgao->num_rows > 0) {
?>
     
    
    <div style="margin-left: 100px; margin-right: 100px;">

        <br>
        <div class="buttons">
            <a href="../tipoModalidade/createModalidade.php" class="btn btn-primary">Nova modalidade</a>
        </div>
        <br>

        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Tipo</th>
                <th></th>
            </tr>
            

            <?php
            while ($exibir = $dadosOrgao->fetch_assoc()) {
            ?>
                <tr></tr>
                <tr>
                    <td><?php echo $exibir["modalidade"] ?></td>


                    <td>
                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteModalidade.php?id=<?php echo $exibir["id_modalidade"] ?>" style="text-decoration: none; color: white"> Excluir </a>
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
            <a href="../tipoModalidade/createModalidade.php" class="btn btn-primary">Nova modalidade</a>
        </div>

     </div>
     <?php
}
?>   