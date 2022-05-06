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
<body class="servicos">
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
                <a href="sobre.php" id="sobre" class="nav-link">sobre</a>
            </li>

            <li class="nav-item">
                <a href="servicos.php" id="servicos" class="nav-link">Serviços</a>
            </li>

            <li class="nav-item">
                <a href="fale_conosco.php" id="fale_conosco" class="nav-link">Fale conosco</a>
            </li>

            <li class="nav-item">
                <a href="login.php" id="login" class="nav-link">Entrar</a>
            </li>
        </ul>
        </div> 
    </nav>
    <!-- Fim Navegação -->

    <!-- Inicio Capa -->
    <section id="capa">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1>Pet House, o lar para os seus pets</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut purus purus. Curabitur vitae quam vestibulum, interdum felis sed, auctor nulla. Morbi vel pharetra nibh, sit amet aliquam justo. Nam est metus, fermentum et lectus pulvinar, vestibulum mattis quam. Nullam massa enim, malesuada a massa sit amet, aliquet finibus eros. Cras interdum odio vel ultrices rhoncus. Quisque tempor odio et faucibus auctor.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="align-self-end">
                        <img src="img/pet-banner.png">
                    </div>
                </div>

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