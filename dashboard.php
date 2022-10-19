<?php
session_start();

echo "Página restrita";
?>

<head>
    <style>
        h2{
            font-size: 20px;
            color: red;
            padding: 10px;
        }
    </style>
</head>

<h2>Olá <?php echo $_SESSION['email']?></h2>