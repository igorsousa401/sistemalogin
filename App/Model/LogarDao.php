<?php
namespace App\Model;
require_once 'Conexao.php';
require_once 'Logar.php';

use Logar;

class LogarDao {

    public $mensagens = [];

    public function RealizarLogin(Logar $l) {

        $sql = "SELECT * FROM usuarios WHERE 1 email ='$l->email' AND senha = '$l->senha'";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $this->mensagens[] = "A conexão foi bem sucedida!";
            foreach($this->mensagens as $mensagem) {
                echo "<li>$mensagem</li>";
            }
            header('Location: ../../dashboard.php');
        } else{
            $this->mensagens[] = "Usuário/Senha incorreto!";
            foreach($this->mensagens as $mensagem) {
                echo "<li>$mensagem</li>";
            }
            header('Location: ../../login.php');
            $this->mensagens[] = "Usuário/Senha Inválido!";
            foreach($this->mensagens as $mensagem) {
                echo $mensagem;
            }
        }
    }
}