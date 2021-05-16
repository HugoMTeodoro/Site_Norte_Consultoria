<?php
include("../../data/connection.php");

if ( session_status() !== PHP_SESSION_ACTIVE ){
    session_start();
}
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

<?php
$orgao = '';
$firstname='';
if (isset($_SESSION['logado'])) {
  $idu=$_SESSION['logado'];
  $sqlQuery2="SELECT nome FROM usuario where id_usuario=$idu";
  $usuarioatual = $connection->query($sqlQuery2);
  if ($usuarioatual->num_rows > 0) {
    while ($row = $usuarioatual->fetch_assoc()) {
      $user = $row['nome'];
      $pieces = explode(" ", $user);
      $firstname=", ".$pieces[0];

?>

<?php
    }
  }




  $sqlQuery = "SELECT nome_orgao_atual FROM orgao_atual where id_orgao_atual=1";

  $orgaoatual = $connection->query($sqlQuery);

  if ($orgaoatual->num_rows > 0) {

    while ($row = $orgaoatual->fetch_assoc()) {
      $orgaocrud = $row['nome_orgao_atual'];
      $orgao = '- ' . $row['nome_orgao_atual'];

?>

<?php
    }
  }
}
?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../home/home.php">Norte Consultoria <?php echo $orgao.$firstname ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <?php
          if (isset($_SESSION['logado'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="../analista/createAnalista.php">Analistas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../home/orgao.php">Órgãos</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/sair.php">Sair</a>
            </li>
          <?php
          
          }
          ?>
          <?php
          if (isset($_SESSION['logado'])) {
          ?>

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

