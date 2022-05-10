<?php 
require_once "validador_acesso.php";
?>

<?php

  $servicos = array();

  //Abrir o arquivo txt
  $arquivo = fopen('arquivo.txt', 'r');

  //Enquanto houver linhas a serem recuperados
  while(!feof($arquivo)) {
    $registro = fgets($arquivo);
    $servicos[] = $registro;
  }

  //Fechando arquivo txt
  fclose($arquivo);

   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Pet House</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/88df19f8f8.js" crossorigin="anonymous"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="tela_principal.css">

    <link rel="icon" href="img/icon.jpg">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

    </style>
  </head>
<body>
    <!-- Inicio Navegação -->
    <nav class="navbar navbar-expand-md navbar-light" id="menu">
        <a href="index.php" class="navbar-brand">
            <img id="logo" src="img/icon.jpg">
            <h1>PET HOUSE</h1>
        </a>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="nav-principal">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="logoff.php" id="sair" class="nav-link">Sair</a>
            </li>
        </ul>
        </div> 
    </nav>
    <!-- Fim Navegação -->
    
    <!-- Inicio Consultar Serviço -->
    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card" style="border: 2px solid #336599;">
            <div class="card-header" style="height: 50px; background-color: #336599;color: #FFF;font-size: 20px;text-align: center;">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($servicos as $servico) { ?>

                <?php 

                  $servico_dados = explode('#', $servico);
                  //Verifica se o id é do tipo usuário
                  if($_SESSION['perfil_id'] == 2) {
                    //Caso seja só ira exibir se ele foi criado pelo usuário
                    if($_SESSION['id'] != $servico_dados[0]) {
                      continue;
                    };

                  }

                  if(count($servico_dados) < 3) {
                    continue;
                  }

                ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $servico_dados[1];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $servico_dados[2];?></h6>
                    <p class="card-text"><?php echo $servico_dados[3];?></p>
                  </div>
                </div>
              
              <?php } ?>  

              <div class="row mt-5 d-flex">
                <div class="col-6">
                  <a href="principal.php" class="btn btn-lg btn-block" style="background-color: #336599; width: 265px; color: #FFF; text-align: center;">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Consultar Serviço -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>