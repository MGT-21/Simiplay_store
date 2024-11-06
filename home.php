<a?php session_start(); // Inicia a sessão // Verifica se o usuário está logado if (!isset($_SESSION['username'])) { //
  Corrigido para 'username' para consistência header("Location: index.php"); // Redireciona para a página de login se
  não estiver autenticado exit; } // Exibe uma mensagem de boas-vindas ?>

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
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark py-1">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-menu-icon"></span>
      </button>

      <a class="navbar-brand d-flex order-lg-0 align-items-center" href="#">
        <img src="./imagens/logo.svg" alt="">
        <ul class="logo-text-container">
          <li class="font-weight-bold logo-title-top">Simiplay</li>
          <li class="logo-title-bot">store</li>
        </ul>
      </a>

      <div class="order-lg-2 d-flex">

        <button class="cart-toggler" data-toggle="collapse" data-target="#CartSupportedContent" aria-expanded="false">
          <span class="navbar-cart-icon"></span>

          <span class="badge custom-badge badge-warning" id="">1</span>
        </button>


        <div class="dropdown">
          <button class=" btn dropdown-toggle text-light" data-toggle="dropdown" aria-expanded="false">
            <span class="text-light mr-2">Nome</span>
            <span class="nav-login-logo"></span>
          </button>
          <div class="dropdown-menu bg-dark dropdown-menu-right">
            <a class="dropdown-item text-light" href="./logout.php">Lista de desejos</a>
            <a class="dropdown-item text-light" href="#">Meus pedidos</a>
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
              <a class="dropdown-item text-light" href="#">todos os jogos</a>
              <a class="dropdown-item text-light" href="#">a preço de banana</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">gift cards</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">suporte</a>
          </li>
        </ul>

      </div>

    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active align-items-center justify-content-center">
          <div class="px-5 custom-img py-5">
            <span class="badge badge-danger text-uppercase mb-3 py-1">Por tempo limitado</span>
            <h2 class="text-uppercase mb-3 h4">Pague com o pix e Ganhe 15% off</h2>
            <p class="mb-3">Válido para qualquer produto de nossa loja</p>
            <a type="button" class="btn btn-danger p-1" href=""> Aproveitar</a>
          </div>
          <div class="d-none">
            <img src="./imagens/ilustracao.png" alt="" height="250px">
          </div>
        </div>
        <div class="carousel-item align-items-center justify-content-center">
          <div class="px-5 custom-img py-5">
            <span class="badge badge-danger text-uppercase mb-3 py-1">Por tempo limitado</span>
            <h2 class="text-uppercase mb-3 h4 text-bold"> jogos a preço de banana</h2>
            <p class="mb-3">Catálogo com jogos a partir de R$ 5,90 confira já!</p>
            <a type="button" class="btn btn-danger p-1" href=""> Aproveitar</a>
          </div>
          <div class="d-none">
            <img src="./imagens/ilustracao.png" alt="" height="250px">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>


    <div class="mt-4">

      
      <div class="mt-5 cards-container mx-3">
        <div class="d-flex justify-content-between cards-container-title mb-3"> 
          <h3 class="h4">fronsoftware</h3>
          <button type="button" class="btn btn-warning">Warning</button>
        </div>

        <div class="card bg-dark">
          <a href="#" class="text-light">
            <img src="./imagens/ds-2.png" class="card-img-top" alt="...">
            <div class="card-body p-1">
              <h5 class="card-title h5 my-2">Dark Souls II</h5>
              <p class="card-text mb-3">fronsoftware</p>
          </a>
          <div class="card-elements-shop">
            <span class="btn btn-danger p-1 area-b btn-sm">-15%</span>
            <button href="#" class="btn btn-primary area-c btn-sm">R$ 230,00</button>
          </div>
        </div>
      </div>
      <div class="card bg-dark">
        <a href="#" class="text-light">
          <img src="./imagens/ds-2.png" class="card-img-top" alt="...">
          <div class="card-body p-1">
            <h5 class="card-title h5 my-2">Dark Souls II</h5>
            <p class="card-text mb-3">fronsoftware</p>
        </a>
        <div class="card-elements-shop">
          <span class="btn btn-danger p-1 area-b btn-sm">-15%</span>
          <button href="#" class="btn btn-primary area-c btn-sm">R$ 230,00</button>
        </div>
      </div>
    </div>
    <div class="card bg-dark">
      <a href="#" class="text-light">
        <img src="./imagens/ds-2.png" class="card-img-top" alt="...">
        <div class="card-body p-1">
          <h5 class="card-title h5 my-2">Dark Souls II</h5>
          <p class="card-text mb-3">fronsoftware</p>
      </a>
      <div class="card-elements-shop">
        <span class="btn btn-danger p-1 area-b btn-sm">-15%</span>
        <button href="#" class="btn btn-primary area-c btn-sm">R$ 230,00</button>
      </div>
    </div>
    </div>
    <div class="card bg-dark">
      <a href="#" class="text-light">
        <img src="./imagens/ds-2.png" class="card-img-top" alt="...">
        <div class="card-body p-1">
          <h5 class="card-title h5 my-2">Dark Souls II</h5>
          <p class="card-text mb-3">fronsoftware</p>
      </a>
      <div class="card-elements-shop">
        <span class="btn btn-danger p-1 area-b btn-sm">-15%</span>
        <button href="#" class="btn btn-primary area-c btn-sm">R$ 230,00</button>
      </div>
    </div>
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

        <div class="card-body" id="">
          Jogos no carrinho
        </div>

        <div class="card-footer d-flex justify-content-between flex-column">

          <div class="d-flex align-items-center justify-content-between mb-3">

            <h5 class="font-weight-bold">Total:</h5>

            <h5 class="font-weight-bold">R$ 200,00</h5>

          </div>

          <a href="#" class="btn btn-primary font-weight-bold text-uppercase">Finalizar compra</a>

        </div>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

      <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
  </body>

  </html>