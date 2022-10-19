<?php
namespace App\Model;

require_once 'Conexao.php';

class CadastrarDao{
    public function Create(Cadastrar $c){
        
        $sql = 'INSERT INTO usuarios (email, nome, senha) VALUES (?,?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->email);
        $stmt->bindValue(2, $c->nome);
        $stmt->bindValue(3, $c->senha);

        $stmt->execute();
        

    }
    public function Read(){

    }
    public function Update(){
        
    }
    public function Delete(){
        
    }
}