<a?php session_start(); // Inicia a sessão // Verifica se o usuário está logado if (!isset($_SESSION['username'])) { //
  Corrigido para 'username' para consistência header("Location: index.php"); // Redireciona para a página de login se
  não estiver autenticado exit; }?></a>

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

    <div class="d-flex justify-content-center align-items-center colapse-container">
      <div class="accordion custom-layout" id="accordionExample">

        <div class="card bg-dark">

          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link w-100 text-left text-light" type="button" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="d-flex justify-content-between">
                  <ul>
                    <li class="descricao-title">Cod produto</li>
                    <li>#212dasd1...</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Pagamento</li>
                    <li>Cartão de credito</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Valor</li>
                    <li>229,90</li>
                  </ul>

                </div>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body colapse-contaier-botton d-flex justify-content-between">
              <ul>
                <li class="descricao-title">Produtos(s)</li>
                <li>Elden Ring</li>
              </ul>
              <button type="button" class="btn btn-warning">comprar novamente</button>
            </div>
          </div>
        </div>
        <div class="card bg-dark">

          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link w-100 text-left text-light" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <div class="d-flex justify-content-between">
                  <ul>
                    <li class="descricao-title">Cod produto</li>
                    <li>#212dasd2...</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Pagamento</li>
                    <li>Cartão de credito</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Valor</li>
                    <li>229,90</li>
                  </ul>

                </div>
              </button>
            </h2>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body colapse-contaier-botton d-flex justify-content-between">
              <ul>
                <li class="descricao-title">Produtos(s)</li>
                <li>Elden Ring</li>
              </ul>
              <button type="button" class="btn btn-warning">comprar novamente</button>
            </div>
          </div>
        </div>

        <div class="card bg-dark">

          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link w-100 text-left text-light" type="button" data-toggle="collapse"
                data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <div class="d-flex justify-content-between">
                  <ul>
                    <li class="descricao-title">Cod produto</li>
                    <li>#212dasd3...</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Pagamento</li>
                    <li>Cartão de credito</li>
                  </ul>

                  <ul>
                    <li class="descricao-title">Valor</li>
                    <li>229,90</li>
                  </ul>

                </div>
              </button>
            </h2>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body colapse-contaier-botton d-flex justify-content-between">
              <ul>
                <li class="descricao-title">Produtos(s)</li>
                <li>Elden Ring</li>
              </ul>
              <button type="button" class="btn btn-warning">comprar novamente</button>
            </div>
          </div>
        </div>

        <div class="card bg-dark">
  
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link w-100 text-left text-light" type="button" data-toggle="collapse"
                data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                <div class="d-flex justify-content-between">
                  <ul>
                    <li class="descricao-title">Cod produto</li>
                    <li>#212dasd2...</li>
                  </ul>
  
                  <ul>
                    <li class="descricao-title">Pagamento</li>
                    <li>Cartão de credito</li>
                  </ul>
  
                  <ul>
                    <li class="descricao-title">Valor</li>
                    <li>229,90</li>
                  </ul>
  
                </div>
              </button>
            </h2>
          </div>
          <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body colapse-contaier-botton d-flex justify-content-between">
              <ul>
                <li class="descricao-title">Produtos(s)</li>
                <li>Elden Ring</li>
              </ul>
              <button type="button" class="btn btn-warning">comprar novamente</button>
            </div>
          </div>
        </div>
  
      </div>
      </div>





    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2022 Company Name</p>
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
  </body>

  </html>