<?php
    $nomeArquivo = "usuarios.json";
    if(file_exists($nomeArquivo)){
        $conteudoJson = file_get_contents($nomeArquivo);
        $arrayAssoc = json_decode($conteudoJson, true);
    }
?>

<ul>
    <?php foreach ($arrayAssoc as $chave => $valor) : ?>
        <li><?php echo $chave . " : " . $valor; ?></li>

    <?php endforeach; ?>
</ul>