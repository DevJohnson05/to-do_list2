<?php 
    class Conexao {

        public static function get_conexao(): PDO {
            $conexao = new self();
            return new PDO("mysql:localhost; dbname= todo_list", 'root', 'Niciu2005#');
        }
    }
?>