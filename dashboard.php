<?php
session_start();

echo "Página restrita";
?>

<h4>Olá <?php echo $_SESSION['email']?></h4>