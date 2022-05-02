<?php 
require_once "validador_acesso.php";
  
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
    
    <!-- Inicio Tela Principal -->
    <section id="tela_principal">
        <div class="container-fluid">
            <div class="row" style="height: 538px;">

                <div class="col-md-6 d-flex align-self-center justify-content-center">
                    <div class="card" style="width: 300px; height: 400px; border: 1px solid #336599;">
                        <div class="card-header" style="height: 50px; background-color: #336599;color: #FFF;font-size: 20px;text-align: center;">
                            Registrar serviço
                        </div>

                        <div class="card-body justify-content-center align-self-center" style="padding-top: 100px;">
                            <a href="abrir_servico.php">
                                <i class="fa-solid fa-bath" style="color: #336599;font-size: 100px; "></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-self-center justify-content-center">
                <div class="card" style="width: 300px; height: 400px; border: 1px solid #336599;">
                        <div class="card-header" style="height: 50px; background-color: #336599;color: #FFF;font-size: 20px;text-align: center;">
                            Consultar serviço
                        </div>

                        <div class="card-body justify-content-center align-self-center" style="padding-top: 100px;">
                            <a href="consultor_servico.php">
                                <i class="fa-solid fa-file" style="color: #336599;font-size: 100px; "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Fim Tela Principal -->

    <footer class="d-flex justify-content-center">
        <h6 class="align-self-center">Desenvolvido por Ricardo Costa</h6>   
    </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>