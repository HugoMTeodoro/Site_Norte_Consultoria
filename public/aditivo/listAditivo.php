<?php include("../Template/header.php") ?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM aditivo where codigo_processo='$codigo' and id_processo=$idproc";

    $dadosAditivo = $connection -> query($sql);

    if($dadosAditivo -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        <br>
       
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Numero</th>
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Prazo</th>
                    <th>Tipo</th>
                    <th>Empresa</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosAditivo -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["numero_aditivo"] ?></td>
                        <td><?php echo $exibir["data_aditivo"] ?></td>
                        <td><?php echo $exibir["valor_aditivo"] ?></td>
                        <td><?php echo $exibir["prazo_aditivo"] ?></td>
                        <td><?php echo $exibir["tipo_aditivo"] ?></td>
                        <td><?php echo $exibir["nome_empresa"] ?></td>
                        <td><?php echo $exibir["codigo_processo"] ?></td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deleteAditivo.php?id=<?php echo $exibir ["id_aditivo"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                    
                                </button>

                                <button type="submit" class="btn btn-success" formmethod="post">
                                <a href="../aditivo/editAditivo.php?id=<?php echo $exibir["id_aditivo"] ?>" style="text-decoration: none; color: white">Editar</a>
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
