<?php 
    $nomeArquivo = "usuarios.json";

    $arrayAssoc = [
        "nome" => "Anderson",
        "email" => "anderson.lavoratoo@gmail.com",
        "senha" => "123456"
    ];
    // transforando e=o array em json
    $json = json_encode($arrayAssoc);
    //colocando o json dentro do arquivo usuarios.json
    file_put_contents($nomeArquivo, $json);
    // imprimindo o array
    // echo $json;
    // echo "<br>";
    // transformando o json em array associativo
    // $arrayNovoAssoc = json_decode($json, true);
    // //imprimindo o array
    // var_dump($arrayNovoAssoc); 

?>