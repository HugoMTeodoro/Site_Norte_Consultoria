<?php
if ( session_status() !== PHP_SESSION_ACTIVE ){
    session_start();
}

if(isset($_SESSION['logado'])){
    $id_usuario=$_SESSION['logado'];
}else{
            ?>
        <script>
            
            window.location = "../login/index.php";
        </script>
        <?php
        }

?>