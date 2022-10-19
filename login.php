<?php
require_once 'vendor/autoload.php';

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
    <form action="App/Model/Logar.php" method="post">
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email_login" id="email_login">

            <label for="senha">Senha</label>
            <input type="password" name="senha_login" id="senha_login">

            <button type="submit" name="btn-logar" id="btn-logar">Entrar</button>
            
        </div>
