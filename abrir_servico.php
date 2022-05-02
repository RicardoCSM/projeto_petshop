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
    
    <!-- Inicio Abrir Serviço -->
    <section style="height: 538px;">
        <div class="container">    
            <div class="row">

                <div class="card-abrir-chamado d-flex justify-content-center align-self-center" >
                    <div class="card" style="margin-top: 50px; width: 600px; height: 400px; border: 2px solid #336599;">
                        <div class="card-header" style="height: 50px; background-color: #336599;color: #FFF;font-size: 20px;text-align: center;">
                            Registrar Serviço
                        </div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col">
                            
                            <form method="POST" action="registra_servico.php">
                                <div class="form-group">
                                <label>Título</label>
                                <input name="titulo" type="text" class="form-control" placeholder="Título">
                                </div>
                                
                                <div class="form-group">
                                <label>Categoria</label>
                                <select class="form-control" name="categoria">
                                    <option>Banho</option>
                                    <option>Serviços veterinários</option>
                                    <option>Exames de laboratório</option>
                                    <option>Spa</option>
                                    <option>Tosa</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-6">
                                        <a href="principal.php" class="btn btn-lg btn-block" style="background-color: #336599; width: 265px; color: #FFF; text-align: center;">Voltar</a>
                                    </div>

                                    <div class="col-6">
                                        <button class="btn btn-lg btn-block" style="background-color: #336599; width: 265px; color: #FFF; text-align: center;" type="submit">Abrir</button>
                                    </div>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim Serviço -->

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