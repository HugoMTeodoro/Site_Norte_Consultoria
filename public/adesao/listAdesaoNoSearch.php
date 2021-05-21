<?php include("../Template/header.php") ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>
 

<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM adesao";


   


    $dadosAdesao = $connection -> query($sql);

    if($dadosAdesao -> num_rows > 0)
    {
    ?>
    <div class="form">
    
    
        <br>
        <br>
        <br>
    
        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        
        
        <br>
       
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Exercício</th>
                    <th>Número processo da adesão</th>
                    <th>Número processo inexigibilidade</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosAdesao -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["exercicio"] ?></td>
                        <td><?php echo $exibir["num_adesao"] ?></td>
                        <td><?php echo $exibir["num_inexigibilidade"] ?></td>
                            <td>
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteAdesao.php?id=<?php echo $exibir ["id_adesao"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                </button>
                                
                                <form name="editbutton" action="editAdesao.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $exibir["codigo_processo"] ?>">
                                <input type="hidden" name="action" value="../adesao/editAdesao.php">
                                
                                <br>
                                <input type="hidden" name="tipo" value="adesao">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_adesao"] ?>">
                                
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
    }
    else
    {
        echo "Nenhum registro encontrado.";
    }
    ?>

<?php
error_reporting(0);
?>
