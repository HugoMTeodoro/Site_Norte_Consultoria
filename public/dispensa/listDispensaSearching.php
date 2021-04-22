<?php include("../Template/header.php") ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>


<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM dispensa WHERE num_dispensa LIKE '%$usuarios%' ";

    $dadosConsulta = $connection -> query($sql);


   


    $dadosDispensa = $connection -> query($sql);

    if($dadosDispensa -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <h2>Dispensa</h2>
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Exercício</th>
                    <th>Número do processo</th>
                    <th>Número da dispensa</th>
                </tr>

                <?php
                    while($exibir = $dadosDispensa -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["exercicio"] ?></td>
                        <td><?php echo $exibir["num_processo"] ?></td>
                        <td><?php echo $exibir["num_dispensa"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteDispensa.php?id=<?php echo $exibir ["id_dispensa"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                    
                                </button>
                                <button type="submit" class="btn btn-success" formmethod="post">
                                    <a href="editDispensa.php?id=" style="text-decoration: none; color: white"> Editar </a> 
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
