<?php 
    session_start();

    //Modificação do texto para evitar bug
    $titulo = str_replace ('#', '-', $_POST['titulo']);
    $descricao = str_replace ('#', '-', $_POST['descricao']);

    //Montagem do texto
    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $_POST['categoria'] . '#' . $descricao . PHP_EOL;

    //Abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //Escrevendo texto
    fwrite($arquivo, $texto);
    //Fechando arquivo
    fclose($arquivo);

    //Redirecionamento
    header('Location: abrir_servico.php');

?>