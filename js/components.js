//elemento: navbar

const NAV_CONTAINER = document.getElementById('nav');

const NAV = ` 
     <nav class="navbar custom-navbar navbar-expand-lg navbar-dark py-2 fixed-top">

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
            <span class="mr-2">Nome</span>
            <span class="nav-login-logo"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="pedidos.php">Meus pedidos</a>
            <a class="dropdown-item" href="logout.php" target="">Sair</a>
          </div>
        </div>

      </div>

      <div class="collapse navbar-collapse order-lg-1 justify-content-center" id="navbarSupportedContent">

        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              jogos
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="tudo.php">todos os jogos</a>
              <a class="dropdown-item" href="tudo.php">a preço de banana</a>
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

    </nav> `; 

//elemento: footer

const FOOTER_CONTAINER = document.getElementById('footer');

const FOOTER = `
    <div class="">
        <div class="d-flex justify-content-between w-100 footer-top p-2"> 
            <div>
                <h5 class="mb-1 font-weight-bold footer-text mb-2">
                    Siga a Simiplay
                </h5>
                <img src="./imagens/assets/social media.png"width="120px" alt="">
            </div>
    
            
            <div class="d-flex px-2 py-3 footer-text">

                <ul class="links px-3">
                    <li class="font-weight-bold">Institucional</li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Seu jogo na Simiplay</a></li>
                    <li><a href="#">Segurança</a></li>
                </ul>

                <ul class="links">
                    <li class="font-weight-bold" >Ajuda</li>
                    <li><a href="#">Suporte</a></li>
                    <li><a href="#">Termos de uso</a></li>
                    <li><a href="#">Política de privacidade</a></li>
                    <li><a href="#">Procon-BA</a></li>    
                </ul>       
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center  px-2 py-3">
            <a class="navbar-brand d-flex align-items-center" href="home.php">
            <img src="./imagens/logo.svg" alt="">
                <ul class="logo-text-container">
                    <li class="font-weight-bold logo-title-top text-white ">Simiplay</li>
                    <li class="logo-title-bot text-white">store</li>
                </ul>
            </a>
            <div class="text-white footer-text">
                <p class="mb-1 text-right">Simiplay store ltda. CNPJ 2.345.678/0001-95</p>
                <p class="text-right">Rua das Flores, n 123, Centro Xique-Xique, BA - 47660-000</p>
            </div>
        </div>
    </div>
`;    


//função que constroi os componentes

function loadComponents() { 
    NAV_CONTAINER.innerHTML = NAV;
    FOOTER_CONTAINER.innerHTML = FOOTER;

} 

// Carrega o componente quando o conteúdo da página é carregado 

document.addEventListener('DOMContentLoaded', loadComponents);