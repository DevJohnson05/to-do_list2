<?php 
    class Conexao {

        public static function get_conexao(): PDO {
            return new PDO("mysql:host=localhost; dbname=todo_list", 'root', 'Niciu2005#');
        }
    }
?>