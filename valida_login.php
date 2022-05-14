<?php 

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    $cadastros = array();

    $arquivo = fopen('dados.txt', 'r');

    $id = 1;
    while(!feof($arquivo)) {
        $dados = fgets($arquivo);

        $auxiliar = explode('#', $dados);

        if(empty($auxiliar[0])) {
            continue;
        } 

        $auxiliar[1] = trim(preg_replace('/\s\s+/', ' ', $auxiliar[1]));

        $usuarios_app[] = array(
            'id' => $id,
            'email' => $auxiliar[0],
            'senha' => $auxiliar[1],
            'perfil_id' => $auxiliar[0] == 'adm@gmail.com' ? 1 : 2
        );

        // $usuarios_app[0]['perfil_id'] = 1;
        
        $id++;
    }

    fclose($arquivo);

    foreach($usuarios_app as $user) {

        if( $user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        };

    };

    if($usuario_autenticado) {
        echo 'Usuário Autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: principal.php');
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: login.php?login=erro');
    };

?>