<?php

use App\Model\CadastrarDao;

require_once 'vendor/autoload.php';

$deletar = new CadastrarDao();
$deletar->Delete(5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            
            align-items: center;
        }
        form{
            width: 50%;
            margin: auto auto;
            height: 100%;
        }
        label, input, button{
            display: block;
            width: 100%;
        }
        
        input{
            margin-bottom: 10px;
            padding: 10px 30px;
            font-size: 15px;
        }
        button{
            margin-top: 10px;
            padding: 10px 0;
        }
    </style>
     
    <title>Login</title>
</head>
<body>
    <form action="App/Model/Cadastrar.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <button type="submit" name="btn-cadastrar" id="btn-cadastrar">Cadastrar</button>
            
        </div>
       
    
    </form>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>