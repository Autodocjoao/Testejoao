<?php
    $nomeArquivo = "usuarios.json";

    $arrayAssoc = [
        "nome" => "joao",
        "email" => "joao.fioravante@hotmail.com",
        "senha" => "123456"
    ];

    $json = json_encode($arrayAssoc);
    // colocando o jason dentro do arquivo usuarios.json
    file_put_contents($nomeArquivo, $json);
    




    //imprimindo o jason
    echo $json;
    echo "<br/>";

    // transformando o jason em array associativo
    // $arrayNovoAssoc = json_decode($json, true);
    // var_dump($arrayNovoAssoc);

?>