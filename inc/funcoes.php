<?php
// Funções
    function validarNome ($nome) {
        return strlen($nome) > 0 && strlen($nome) <= 15;
    }

    function validarCpf($CPF) {
        return strlen($CPF) == 11;
    }

    function validarNroCartao($nroCartao){
        $primeiraNumero = substr($nroCartao, 0, 1);
        return $primeiraNumero == 4 || $primeiraNumero == 5 || $primeiraNumero == 6;
    }

    function validarData($data) {
        $dataAtual = date("Y-m");
        return $data >= $dataAtual;
    }

    function validarCvv($cvv) {
        return strlen($cvv) == 3;
    }
    
    function validarCompra($nome, $CPF, $nroCartao, $data, $cvv){
        global $erros;

        if (!validarNome($nome)){
            array_push($erros, "Preencha seu nome");
        }

        if(!validarCpf($CPF)){
            array_push($erros, "Seu CPF precisa ter 11 caracteres");
        }

        if(!validarNroCartao($nroCartao)){
            array_push($erros, "Seu cartão precisa começar com 4, 5 ou 6");
        }

        if(!validarData($data)){
            array_push($erros, "A validade precisa ser maior que a data atual");
        }

        if(!validarCvv($cvv)){
            array_push($erros, "Seu cvv precisa ter 3 caracteres");
        }
    }
?>