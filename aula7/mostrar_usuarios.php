<?php
    $nomeArquivo = "usuarios.json";
    if (file_exists($nomeArquivo)){
        //pegando o conteudo json
        $conteudoJson = file_get_contents($nomeArquivo);
        //transformando em array associativo
        $arrayAssoc = json_decode($conteudoJson, true);
        var_dump($arrayAssoc);
    }
?>

<ul>
   <?php foreach($arrayAssoc as $chave => $valor) : ?>
        <li><?php echo $chave . " : " . $valor; ?></li>
<?php endforeach; ?>
</ul>