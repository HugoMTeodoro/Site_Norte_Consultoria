<?php include("../Template/header.php") ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>
 

<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM inexigibilidade WHERE numInexigibilidade LIKE '%$usuarios%' ";


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
                        <td><?php echo $exibir["num_Processo"] ?></td>
                        <td><?php echo $exibir["num_Inexigibilidade"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteInexigibilidade.php?id=<?php echo $exibir ["id_inexigibilidade"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                    
                                </button>
                                <button type="submit" class="btn btn-success" formmethod="post">
                                <a href="editInexigibilidade.php?id=<?php echo $exibir["id_inexigibilidade"] ?>" style="text-decoration: none; color: white">Editar</a>
                                </button> 
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
