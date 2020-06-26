<?php
    class Valida{
        function cpf($cpf){
            if(strlen($cpf) == 11 && is_numeric($cpf)){
                return true;
            }else{
                return false;
            }
        }
        function cnpj($cnpj){
            if(strlen($cnpj) == 14 && is_numeric($cnpj)){
                return true;
            }else{
                return false;
            }
        }
        function cep($cep){
            if(is_numeric($cep) && strlen($cep) == 8){
                return true;
            }else if($cep == null){
                return true;
            }else{
                return false;
            }
        }
        function senha($senha,$confirmacao){
            if($senha == $confirmacao){
                if(strlen($senha) >= 8 && strlen($senha) <= 20){
                    return true;
                }else{
                    return false;
                }
                    
            }else{
                return false;
            }
        }
    }

?>