<?php

class Conexao {
    private $host = 'localhost';
    private $dbname = 'php_com_pdo';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {

            $conexao = new PDO(
                //DSN (data source name) 
                "mysql:host=$this->host;dbname=$this->dbname",
                //User
                "$this->user",
                //Password
                "$this->pass"
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p> Erro na conexão SQL, código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage() . '</p>';
        }
    }
}