<?php
include("../../data/connection.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title></title>

  <link rel="stylesheet" href="../styles/main.css" />
</head>
<?php $orgao = $_POST["orgao"]; ?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Norte Consultoria - <?php echo $orgao ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['logado'])) {
          ?>
            <a class="nav-link" href="../login/sair.php">Sair</a>
          <?php
          }
          ?>
          <?php
          if (isset($_SESSION['logado'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="../analista/crateAnalista.php">Registrar</a>
            </li>
          <?php
          }
          ?>
        </ul>

      </div>
    </div>

  </nav>

  <br>
  <br>

</body>

</html>