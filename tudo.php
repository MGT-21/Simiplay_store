<a?php session_start(); // Inicia a sessão // Verifica se o usuário está logado if (!isset($_SESSION['username'])) {
  Corrigido para 'username' para consistência header("Location: index.php"); // Redireciona para a página de login se
  não estiver autenticado exit; } ?>

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
    <title>gift card</title>
  </head>

  <body>
    <div id="nav"></div>

    <div class="carousel-container">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./imagens/5.png" class="d-block w-100" alt="...">

          <div class="carousel-caption text-left d-flex align-items-center h-100 justify-content-between">

            <div class="input-group mt-5">
              <input type="text" class="form-control" id="searhBar" placeholder=" Buscando por algo?"
              aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-dark" type="button" id="search-bt">Buscar</button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  <section id="game-area">

    <div class="mt-4 d-flex justify-content-center align-items-center">

      <div class="cards-container" id="gameCardContainer-default">
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
      <script src="js/tudo.js"></script>
      <script src="js/components.js"></script>
  </body>

  </html>