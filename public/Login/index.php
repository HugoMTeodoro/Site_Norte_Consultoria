<?php include("../template/header.php") ?>

<html>

<head>
   <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h2>Norte Consultoria <br> Manipulação de Processos Licitatórios<br></h2>

      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form class="form-signin" method="POST" action="login.php">
               <div class="form-group">

                  <label>Usuário</label>
                  <input name="user" type="text" class="form-control" placeholder="Username">
               </div>
               <div class="form-group">
                  <label>Senha</label>
                  <input name="senha" type="password" class="form-control" placeholder="Password">
               </div>
               <button type="submit" class="btn btn-success">Login</button>

            </form>
            <br>
            <button class="btn btn-warning" onclick="window.location.href='../analista/createAnalista.php'">Registrar</button>

         </div>
      </div>
   </div>
</body>

</html>