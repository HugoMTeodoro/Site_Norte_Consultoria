<?php include("../Template/header.php") ?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM vencedor where codigo_processo='$codigo' and id_processo=$idproc";

    $dadosVencedor = $connection -> query($sql);

    if($dadosVencedor -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        <br>
       
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Empresa</th>
                    <th>Valor</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosVencedor -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["nome_empresa"] ?></td>
                        <td><?php echo $exibir["valor"] ?></td>
                        <td><?php echo $exibir["codigo_processo"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteVencedor.php?id=<?php echo $exibir ["id_vencedor"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                    
                                </button>

                                <button type="submit" class="btn btn-success" formmethod="post">
                                <a href="editVencedor.php?id=<?php echo $exibir["id_vencedor"] ?>" style="text-decoration: none; color: white">Editar</a>
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