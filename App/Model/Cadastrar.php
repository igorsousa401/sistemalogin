<?php

namespace App\Model;

require 'CadastrarDao.php';

class Cadastrar{
    public $nome, $email, $senha;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

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
        $senhaCriptografada = password_hash($s, PASSWORD_DEFAULT);
        $this->senha = $senhaCriptografada;
    }
}

if(isset($_POST['btn-cadastrar'])) {
    $cadastrar = new Cadastrar();
    $cadastrar->setNome($_POST['nome']);
    $cadastrar->setEmail($_POST['email']);
    $cadastrar->setSenha($_POST['senha']);
    $cadastrarDao = new CadastrarDao();
    $cadastrarDao->Create($cadastrar);
}

?>



