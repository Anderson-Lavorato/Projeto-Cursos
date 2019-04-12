<?php
$nomeArquivo = "texto.txt";
// verificando se o arquivo não existe "!"
if (!file_exists($nomeArquivo)){
    //abrindo o arquivo já criado, se não existir será criado
    $arquivoAberto = fopen($nomeArquivo, 'w+');
    //escrevendo no arquivo
    for($i = 1; $i <= 100; $i++){
    fwrite($arquivoAberto, $i . ' - Olá mundo!' .PHP_EOL);
    //fechando arquivo
    }
    fclose($arquivoAberto);
}else{
    //abrindo o arquivo no modo de escrita
    $arquivoAberto = fopen($nomeArquivo, "r");
    //pegando o tamanho do arquivo
    $tamanho = filesize($nomeArquivo);
    //pegando o conteúdo deste arquivo
    $conteudo = fread($arquivoAberto, $tamanho);

    echo $conteudo;
}
?>