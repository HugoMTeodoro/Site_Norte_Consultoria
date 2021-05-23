<?php

include("../Template/header.php");
include("../login/valida.php");
?>

<html lang="pt-BR">

<head>
    <title>Home - Norte Consultoria</title>
</head>

<body>
    <br>
    <br>

    <div class="container">

        <div class="row">


        </div>



        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Processos licitatórios</h5>
                <p class="card-text"></p>
                <div class="buttons">
                    <a href="../dispensa/listDispensa.php" class="btn btn-primary">Lista de dispensa</a>

                    <a href="../inexigibilidade/listInexigibilidade.php" class="btn btn-primary">Lista de inexigibilidade</a>

                    <a href="../adesao/listAdesao.php" class="btn btn-primary">Lista de adesão</a>

                    <a href="../modalidade/listModalidade.php" class="btn btn-primary">Lista de modalidade</a>

                    <a href="../pregao/listPregao.php" class="btn btn-primary">Lista de pregão</a>


                </div>

            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <br>

        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Gerência de ferramentas</h5>
                <p class="card-text"></p>
                <div class="buttons">
                    <a href="../categoria/listCategoria.php" class="btn btn-primary">Lista de categoria</a>

                    <a href="../tipoModalidade/createModalidade.php" class="btn btn-primary">Tipos de modalidade</a>

                    <a href="../tipo_pregao/createTipoPregao.php" class="btn btn-primary">Tipos de pregão</a>

                    <a href="../registro/createRegistro.php" class="btn btn-primary">Lista de registros</a>

                    <a hef="../inciso/createInciso.php" class="btn btn-primary">Lista de inciso</a>

                    
                        
                        
                        <a href="../testetxt/txtDispensa.php" class="btn btn-primary" >Click Me!</a>
                    
                    




                </div>

            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <br>

        <br>



</body>

</html>

<footer class="py-5 bg-dark">

    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
</footer>