<?php
    $nomeArquivo = "texto.txt";
    // verificando se o arquivo não existe
    if (!file_exists($nomeArquivo)) {
        //abrindo o arquivo, se ele não existir será criado.
        $arquivoAberto = fopen($nomeArquivo, "w+");
        //escrevendo no arquivo
        for ($i = 0; $i <= 100; $i++)
        fwrite($arquivoAberto, $i . " - Olá Mundo!\n");
        //fechar o arquivo
        fclose($arquivoAberto);
    } else{
        //abrindo arquivo que já existe
        $arquivoAberto = fopen($nomeArquivo, "r");
        //pegando o tamanho do arquivo
        $tamanho = filesize($nomeArquivo);
        //pegando o onteúdo do arquivo
        $conteudo = fread($arquivoAberto, $tamanho);

        echo $conteudo;
    }
?>