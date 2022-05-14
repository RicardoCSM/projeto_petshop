<?php 

    $cadastros = array();
    $dados_detalhes = null;

    $arquivo = fopen('dados.txt', 'r');

    while(!feof($arquivo)) {
        $dados = fgets($arquivo);

        $dados_detalhes = explode('#', $dados);

        print_r($dados_detalhes);
    }

    fclose($arquivo);

?>