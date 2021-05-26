<?php
include("../Login/valida.php");
include("../Template/header.php");
include("../login/valida.php");
?>
<script>
    function redirectPage(v) {
        document.location.href = '../orgao/exercicioAtualDiag.php?param=' + v;

    }
</script>
<br>
<br>
<div style="margin-left: 100px; margin-right: 100px;">
    <h2>Diagnosticos</h2>
    <br>
    <form method="POST" id="form-pesquisa" action="">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
            </div>
            <select class="form-select" name="txtOrgao" id="txtOrgao" onChange="redirectPage(this.value)">
                <option value="<?php echo "Selecione" ?>" selected>
                    <?php echo "Selecione" ?>
                </option>
                <?php

                $sqlQuery = "SELECT dispensa.exercicio as exec1
                FROM dispensa
                LEFT OUTER JOIN adesao ON dispensa.exercicio = adesao.exercicio 
                
                UNION
                
                SELECT adesao.exercicio 
                FROM dispensa 
                RIGHT OUTER JOIN adesao ON dispensa.exercicio = adesao.exercicio
                
                UNION
                
                (
                    
                SELECT inexigibilidade.exercicio as exec1
                FROM inexigibilidade
                LEFT OUTER JOIN pregao ON inexigibilidade.exercicio = pregao.exercicio 
                
                UNION
                
                SELECT pregao.exercicio 
                FROM inexigibilidade 
                RIGHT OUTER JOIN pregao ON inexigibilidade.exercicio = pregao.exercicio
                    
                    
                    
                )
                
                UNION
                
                (
                
                SELECT modalidade.exercicio as exec1
                FROM modalidade
                LEFT OUTER JOIN pregao ON modalidade.exercicio = pregao.exercicio 
                
                UNION
                
                SELECT pregao.exercicio 
                FROM modalidade 
                RIGHT OUTER JOIN pregao ON modalidade.exercicio = pregao.exercicio
                
                ) order by exec1";

                $orgaos = $connection->query($sqlQuery);

                if ($orgaos->num_rows > 0) {

                    while ($row = $orgaos->fetch_assoc()) { {
                ?>

                            <option value="<?php echo $row["exec1"] ?>">
                                <?php echo $row["exec1"] ?>
                            </option>

                <?php
                        }
                    }
                }

                ?>
            </select>
        </div>
        <div class="card text-left">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Diagnostico 1</h5>
                <p class="card-text"> Média de tempo gasto para a realização de um procedimento licitatório desde a Solicitação até a homologação.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico1.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 2</h5>
                <p class="card-text"> Tempo médio gasto na realização dos orçamentos.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico2.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 3</h5>
                <p class="card-text"> Tempo médio gasto na aprovação das minutas de edital e contrato.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico3.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 4</h5>
                <p class="card-text"> Tempo médio de publicação dos editais.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico4.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 5</h5>
                <p class="card-text"> Número de processos realizados para determinados tipos de itens.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico5.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 6</h5>
                <p class="card-text"> Número de dispensas realizadas para atender a emergências.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico6.php" class="btn btn-primary">Diagnosticar</a>




                </div>
                <br>
                <h5 class="card-title">Diagnostico 7</h5>
                <p class="card-text"> Média de tempo gasto para a realização de um procedimento licitatório desde a Solicitação até a homologação.</p>
                <div class="buttons">

                    <a href="../diagnosticos/diagnostico7.php" class="btn btn-primary">Diagnosticar</a>
                </div>
            </div>
            <br>