<?php
    $nomeArquivo = "dados.txt";
    // if (file_exists($nomeArquivo)){
    //     $conteudo = file_get_contents($nomeArquivo);
    //     $conteudo = $conteudo . "Editei o Arquivo\n";
    //     file_put_contents($nomeArquivo, $conteudo);
    //     echo $conteudo;
    // } else{
    //     file_put_contents($nomeArquivo, "criei o arquivo \n");
    // }





    $arquivoAberto = fopen($nomeArquivo, "r");

    if ($arquivoAberto){
        while(($linha = fgets($arquivoAberto)) & $contador <= 10){
            echo $linha;
            ++$contador;
        }
    }
?>