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
    <link rel="stylesheet" href="./style/pedidos.css">

    <link rel="shortcut icon" href="./imagens/logo.svg" type="image/x-icon">
    <title>Simiplay store</title>
  </head>

  <body>
    <div id="nav"></div>

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
                <li class="text-white">Elden Ring</li>
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
                <li class="text-white">Elden Ring</li>
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
                <li class="text-white">Elden Ring</li>
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
                <li class="text-white">Elden Ring</li>
              </ul>
              <button type="button" class="btn btn-warning">comprar novamente</button>
            </div>
          </div>
        </div>
  
      </div>
      </div>



    <div id="cartContainer"></div>

    <div id="footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

    <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
    <script src="js/jogos.js"></script>
    <script src="js/components.js"></script>
  </body>

  </html>