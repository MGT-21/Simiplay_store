<a?php session_start(); // Inicia a sessão // Verifica se o usuário está logado if (!isset($_SESSION['username'])) { //
  Corrigido para 'username' para consistência header("Location: index.php"); // Redireciona para a página de login se
  não estiver autenticado exit; }?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap/css-bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/vars.css">
    <link rel="stylesheet" href="./style/home.css">

    <link rel="shortcut icon" href="./imagens/logo.svg" type="image/x-icon">
    <title>Simiplay store</title>
  </head>

  <body>
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark bg-dark py-2">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-menu-icon"></span>
      </button>

      <a class="navbar-brand d-flex order-lg-0 align-items-center" href="home.php">
        <img src="./imagens/logo.svg" alt="">
        <ul class="logo-text-container">
          <li class="font-weight-bold logo-title-top">Simiplay</li>
          <li class="logo-title-bot">store</li>
        </ul>
      </a>

      <div class="order-lg-2 d-flex">

        <button class="cart-toggler" data-toggle="collapse" data-target="#CartSupportedContent" aria-expanded="false">
          <span class="navbar-cart-icon"></span>

          <span class="badge custom-badge badge-warning" id="cart-number">0</span>
        </button>


        <div class="dropdown">
          <button class=" btn dropdown-toggle text-light" data-toggle="dropdown" aria-expanded="false">
            <span class="text-light mr-2">Nome</span>
            <span class="nav-login-logo"></span>
          </button>
          <div class="dropdown-menu bg-dark dropdown-menu-right">
            <a class="dropdown-item text-light" href="./logout.php">Lista de desejos</a>
            <a class="dropdown-item text-light" href="pedidos.php">Meus pedidos</a>
            <a class="dropdown-item text-light" href="logout.php" target="">Sair</a>
          </div>
        </div>

      </div>

      <div class="collapse navbar-collapse order-lg-1 justify-content-center" id="navbarSupportedContent">

        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              jogos
            </a>
            <div class="dropdown-menu bg-dark">
              <a class="dropdown-item text-light" href="tudo.php">todos os jogos</a>
              <a class="dropdown-item text-light" href="tudo.php">a preço de banana</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="tudo.php">gift cards</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">suporte</a>
          </li>
        </ul>

      </div>

    </nav>

    <div class="carousel-container">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./imagens/5.png" class="d-block w-100" alt="...">

            <div class="carousel-caption text-left d-flex align-items-center h-100 justify-content-between">

              <div class="mt-5">
                <span class="badge badge-dark text-uppercase mb-2 py-1">Por tempo limitado</span>
                <h2 class="text-uppercase h3">Pague com o pix e Ganhe 15% off</h2>
                <p class="mb-3">Válido para qualquer produto de nossa loja</p>
                <a type="button" class="btn btn-warning" href=""> Aproveitar</a>
              </div>
              <div>
                <img class="d-none d-md-block" src="../imagens/ilustracao.png" alt="" height="250px">
              </div>

            </div>
          </div>

          <div class="carousel-item">
            <img src="./imagens/5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption text-left d-flex align-items-center h-100">

              <div class="mt-5">
                <span class="badge badge-dark text-uppercase py-1 mb-2">Por tempo limitado</span>
                <h2 class="text-uppercase h3"> jogos a preço de banana</h2>
                <p class="mb-3">Catálogo com jogos a partir de R$ 5,90 confira já!</p>
                <a type="button" class="btn btn-warning" href=""> Conferir</a>
              </div>

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>

    <div class="mt-4 d-flex justify-content-center align-items-center">

      <div class="cards-container" id="gameCardContainer">
        <div class="d-flex justify-content-between cards-container-title mb-3">
          <h3 class="h3">Fronsoftware</h3>
          <a type="button" class="btn btn-warning" src="tudo.php">Ver mais</a>
        </div>
      </div>
    </div>





    <div class="collapse navbar-collapse fixed-bottom cart-colapse-content float-right" id="CartSupportedContent">

      <div class="card bg-dark">

        <div class="card-header d-flex align-items-center justify-content-between d-lg-none">

          <h5 class="font-weight-bold">
            Carrinho
          </h5>

          <button type="button" class="close custom-close" aria-label="Close" data-toggle="collapse"
            data-target="#CartSupportedContent">
            <span>&times;</span>
          </button>

        </div>

        <div class="card-body cart-itens-container" id="cartItensContainer">

        </div>

        <div class="card-footer d-flex justify-content-between flex-column">

          <div class="d-flex align-items-center justify-content-between mb-3">

            <h5 class="font-weight-bold">Total:</h5>

            <h5 class="font-weight-bold">R$ 200,00</h5>

          </div>

          <a href="pagamento.php" class="btn btn-primary font-weight-bold text-uppercase">Finalizar compra</a>

        </div>

      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2022 Simiplay</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

    <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
    <script src="js/jogos.js"></script>
    <script src="js/script.js"></script>
  </body>

  </html>