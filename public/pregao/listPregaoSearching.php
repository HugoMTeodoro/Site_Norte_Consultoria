<?php include("../Template/header.php");
include("../Login/valida.php"); ?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>
 

<?php



    include("../../data/connection.php");

    $sql = "SELECT * FROM pregao WHERE exercicio = $exer and orgao ='$orgaoa' and (pesquisa LIKE '%$usuarios%' or objeto LIKE '%$usuarios%') order by num_processo ";
   
    $dadosPregao = $connection -> query($sql);

    if($dadosPregao -> num_rows > 0)
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
                    <th>Número</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosPregao -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["exercicio"] ?></td>
                        <td><?php echo $exibir["num_processo"] ?></td>
                        <td><?php echo $exibir["numero"] ?></td>
                            <td>
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                    <a href="deletePregao.php?id=<?php echo $exibir ["id_pregao"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                </button>
                                
                                <form name="editbutton" action="editPregao.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $exibir["codigo_processo"] ?>">
                                <input type="hidden" name="action" value="../pregao/editPregao.php">
                                
                                <br>
                                <input type="hidden" name="tipo" value="pregao">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_pregao"] ?>">
                                
                                <input type="submit" class="btn btn-success btn-sm" value="Editar">
                            </form>
                            </td>
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
