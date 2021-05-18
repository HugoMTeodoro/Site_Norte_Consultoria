<?php include("../Template/header.php") ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>
 

<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM inexigibilidade";


   


    $dadosInexigibilidade = $connection -> query($sql);

    if($dadosInexigibilidade -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        <br>
       
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Exercício</th>
                    <th>Número do processo</th>
                    <th>Número da inexigibilidade</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosInexigibilidade -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["exercicio"] ?></td>
                        <td><?php echo $exibir["num_processo"] ?></td>
                        <td><?php echo $exibir["num_inexigibilidade"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteInexigibilidade.php?id=<?php echo $exibir ["id_inexigibilidade"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                </button>

                                <form name="editbutton" action="editInexigibilidade.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $exibir["codigo_processo"] ?>">
                                <input type="hidden" name="action" value="../inexigibilidade/editInexigibilidade.php">

                                <br>
                                <input type="hidden" name="tipo" value="inexigibilidade">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_inexigibilidade"] ?>">
                                
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
