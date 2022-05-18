<?php

    $email = str_replace ('#', '-', $_POST['email']);
    $senha = str_replace ('#', '-', $_POST['senha']);
    $confirmar_senha = str_replace ('#', '-', $_POST['confirmar_senha']);

    $dado = $email . '#' . $senha . PHP_EOL; 

    $dados = fopen('dados.txt', 'a');
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($senha) >= 8 && $senha == $confirmar_senha) {   
        fwrite($dados, $dado);
        fclose($dados);

        header('Location: login.php?login=cadastro_sucesso');
    }
    else {
        header('Location: login.php?login=erro_cadastro');
    }


?>