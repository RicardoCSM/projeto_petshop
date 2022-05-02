<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Pet House</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="icon" href="img/icon.jpg">

  </head>
<body class="login">
    <!-- Inicio Navegação -->
    <nav class="navbar navbar-expand-md navbar-light" id="menu">
        <a href="index.php" class="navbar-brand">
            <img id="logo" src="img/icon.jpg">
            <h1>PET HOUSE</h1>
        </a>

        <div class="collapse navbar-collapse" id="nav-principal">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" id="home" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <a href="sobre.php" class="nav-link">sobre</a>
            </li>

            <li class="nav-item">
                <a href="servicos.php" class="nav-link">Serviços</a>
            </li>

            <li class="nav-item">
                <a href="fale_conosco.php" class="nav-link">Fale conosco</a>
            </li>

            <li class="nav-item">
                <a href="login.php" id="login" class="nav-link">Entrar</a>
            </li>
        </ul>
        </div> 
    </nav>
    <!-- Fim Navegação -->

    <!-- Inicio Tela Login -->
    <section id="tela_login">
        <div class="container-fluid">
            <div class="row">

                <!-- Inicio Descrição -->
                <div class="col-md-4 d-flex">
                    <div class="align-self-center">
                        <h1>Marque online na</h1>
                        <h1>Pet House</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut purus purus. Curabitur vitae quam vestibulum, interdum felis sed, auctor nulla. Morbi vel pharetra nibh, sit amet aliquam justo. Nam est metus, fermentum et lectus pulvinar, vestibulum mattis quam. Nullam massa enim, malesuada a massa sit amet, aliquet finibus eros.
                        </p>
                    </div>
                </div>
                <!-- Fim Descrição -->

                <!-- Inicio Login -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card-login align-self-center">
                        <div class="card">

                            <div class="card-header">Faça Login</div>

                            <div class="card-body">

                                <form action="valida_login.php" method="post">
                                   
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <input name="senha" type="password" class="form-control" placeholder="Senha">
                                    </div>

                                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                                        <div class="text-danger">
                                        Usuário ou senha inválido(s)
                                        </div>

                                    <?php } ?>

                                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                                        <div class="text-danger">
                                        Por favor, faça login antes de acessar as páginas protegidas
                                        </div>

                                    <?php } ?>
         
                                    <button class="btn btn-lg btn-block" id="botao_login" type="submit">Entrar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Login -->

                <!-- Inicio Cadastro -->
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card-login align-self-center">
                        <div class="card">

                            <div class="card-header">Faça seu Cadastro</div>

                            <div class="card-body">

                                <form method="post">
                                   
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <input name="senha" type="password" class="form-control" placeholder="Senha">
                                    </div>

                                    <div class="form-group">
                                        <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirme sua senha">
                                    </div>
         
                                    <button class="btn btn-lg btn-block" type="submit">Entrar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Cadastro -->

            </div>
        </div>
    </section>
    <!-- Fim Capa -->

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