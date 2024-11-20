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
    <div id="nav"></div>

    <div class="carousel-container">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./imagens/5.png" class="d-block w-100 carousel-image" alt="...">

            <div class="carousel-caption p-0 h-100 d-flex justify-content-center align-items-center">

              <div class=" bg-white text-dark p-2 border border-dark rounded-lg text-left">
                <span class="badge badge-dark text-uppercase mb-2">Por tempo limitado</span>
                <h2 class="text-uppercase carousel-title mb-2">Pague com o pix e Ganhe 15% off</h2>
                <p class="mb-3 text-uppercase carousel-paragraph">Válido para qualquer produto de nossa loja</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="./imagens/6.png" class=" w-100" alt="...">

            <div class="carousel-caption p-0 h-100 d-flex justify-content-center align-items-center">

              <div class="bg-white text-dark p-2 border border-dark rounded-lg text-left">
                <span class="badge badge-dark text-uppercase mb-2">Por tempo limitado</span>
                <h3 class="text-uppercase carousel-title mb-2"> jogos a preço de banana</h3>
                <p class="mb-3 text-uppercase carousel-paragraph">Catálogo com jogos a partir de R$ 5,90 confira já!</p>
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

<section id="game-area">

  <div class="mt-4 d-flex justify-content-center align-items-center">

    <div class="cards-container" id="gameCardContainer-bandai">
    <!--Cards serão gerados aqui-->
    </div>

  </div>
  
  
  <div class="mt-4 d-flex justify-content-center align-items-center banner">

    <div class="cards-container d-flex align-items-center my-0">
      <img src="../imagens/games/RR.jpg" alt="" class="w-100 bor rounded-lg">
    </div>

  </div>


  <div class="mt-4 d-flex justify-content-center align-items-center">

    <div class="cards-container" id="gameCardContainer-ubisoft">
    <!--Cards serão gerados aqui-->
    </div>

  </div>

  <div class="mt-4 d-flex justify-content-center align-items-center banner">

    <div class="cards-container d-flex align-items-center my-0">
      <img src="../imagens/games/SR-2.jpg" alt="" class="w-100 bor rounded-lg">
    </div>

  </div>

  <div class="mt-4 d-flex justify-content-center align-items-center">

    <div class="cards-container-promo" id="gameCardContainer-promo">
    <!--Cards serão gerados aqui-->
    </div>

  </div>


</section>



    <div class="collapse navbar-collapse cart-colapse-content float-right" id="CartSupportedContent">

      <div class="card">

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

          <a href="pagamento.php" class="btn btn-dark font-weight-bold custom-link text-dark text-uppercase">Finalizar compra</a>

        </div>

      </div>
    </div>

    <div id="footer"></div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

    <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
    <script src="js/jogos.js"></script>
    <script src="js/script.js"></script>
    <script src="js/components.js"></script>
  </body>

  </html>