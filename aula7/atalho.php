<?php 
    $nomeArquivo = "dados.txt";
    // if (file_exists($nomeArquivo)){
    //     // verificando se o arquivo existe
    //     $conteudo = file_get_contents($nomeArquivo);
    //     $conteudo = $conteudo . "Editei o arquivo\n";
    //     file_put_contents($nomeArquivo, $conteudo);
    //     echo $conteudo;
    // }else{
    //     file_put_contents($nomeArquivo, "Criei o arquivo\n");
    // }

    $arquivoAberto = fopen($nomeArquivo, "r");

    if ($arquivoAberto){
        $contador = 1;
        while(($linha = fgets($arquivoAberto)) && $contador <= 10){
            echo $linha;
            ++$contador;
        }
    }
?>