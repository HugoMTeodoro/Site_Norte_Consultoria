<?php include("../Template/header.php") ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>
 

<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM adesao WHERE num_adesao LIKE '%$usuarios%' ";


   


    $dadosAdesao = $connection -> query($sql);

    if($dadosAdesao -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
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
                                <button type="submit" class="btn btn-success" formmethod="post">
                                <a href="editAdesao.php?id=<?php echo $exibir["id_adesao"] ?>" style="text-decoration: none; color: white">Editar</a>
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
