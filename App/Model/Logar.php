<?php


use App\Model\LogarDao;

require 'LogarDao.php';

class Logar{
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }
}

if(isset($_POST['btn-logar'])) {
    session_start();
    $logar = new Logar();
    $logar->setEmail($_POST['email_login']);
    $logar->setSenha($_POST['senha_login']);
    $logarDao = new LogarDao();
    $logarDao->RealizarLogin($logar);
    $_SESSION['email'] = $logar->email;
}

