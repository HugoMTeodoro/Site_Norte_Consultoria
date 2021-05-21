<?php include("../Template/header.php");
include("../Login/valida.php");
?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>


<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM dispensa WHERE pesquisa LIKE '%$usuarios%' and exercicio = '$exercicio' ";

    $dadosDispensa = $connection -> query($sql);
    

   


    $dadosDispensa = $connection -> query($sql);

    if($dadosDispensa -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;">
        <br>
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Dispensa</th>
                    <th>Objeto</th>
                </tr>

                <?php
                    while($exibir = $dadosDispensa -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["pesquisa"] ?></td>
                        <td><?php echo $exibir["objeto"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteDispensa.php?id=<?php echo $exibir ["id_dispensa"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                    
                                </button>
                                <button type="submit" class="btn btn-success" formmethod="post">
                                <a href="editDispensa.php?id=<?php echo $exibir["id_dispensa"] ?>" style="text-decoration: none; color: white">Editar</a>
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
