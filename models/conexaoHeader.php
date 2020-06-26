<?php
    class ConexaoHeader{
        public function Conecta(){
            $host = 'localhost:3306';
            $user = 'root';
            $pass = '';
            $db = 'tcc_bd_aprende_ai';

            return mysqli_connect($host,$user,$pass,$db);
        }

    }
?>
