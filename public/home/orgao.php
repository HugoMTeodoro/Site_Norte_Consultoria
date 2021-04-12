<?php
include("../Template/header.php");
include("../login/valida.php");
include("../../data/connection.php");


?>
<br>
<br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Órgão</span>
    </div>
    <select class="form-select" name="orgao" id="orgao">
        <option value="-1" selected>Selecione o órgão desejado</option>
        <?php
        
            $sqlQuery = "SELECT * FROM orgao";
        


        $orgaos = $connection->query($sqlQuery);

        if ($orgaos->num_rows > 0) {

            while ($row = $orgaos->fetch_assoc()) {
        ?>

                <option value="<?php echo $row["nome_orgao"] ?>">
                    <?php echo $row["nome_orgao"]  ?>
                </option>

        <?php
            }
        }
        ?>
    </select>
</div>