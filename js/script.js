//definição de containers



const gameCardContainerBandai = document.getElementById('gameCardContainer-bandai');

const gameCardContainerUbisoft = document.getElementById('gameCardContainer-ubisoft');

const gameCardContainerPromo = document.getElementById('gameCardContainer-promo');

const cartItensContainer = document.getElementById('cartItensContainer');

//definição de elementos secundarios

const cartNumber = document.getElementById('cart-number');

///container Bandai

    //construção do titulo dos cards(Loja)
        const gameCardContainerTitleBandai = `
            <div class="d-flex justify-content-between cards-container-title mb-3 align-items-center">

                <h3 class="h3 text-white">Bandai</h3>

                <a href="tudo.php" class="btn btn custom-link btn-sm active rounded" role="button" aria-pressed="true">Ver mais</a>

            </div>
            `;

    gameCardContainerBandai.innerHTML += gameCardContainerTitleBandai;

    jogosJson.forEach((item) => {
            if (item.dealer == 'Bandai') {
                const gameCard = `
                <div class="card gameCard" id="${item.id}"
                    <a href="#" class="">
                        <img  src="${item.img}" class="card-image" alt="...">
                        <div class="card-body p-1">
                            <img  src="./imagens/assets/plataformas.png"> 
                            <h5 class="card-title h5 my-1">${item.name}</h5>
                            <p class="card-text mb-2">${item.dealer}</p>
                        </div>
                    </a>
                    <div class="mx-1 mb-1">
                        <button href="#" type="button" class="btn btn-block btn-outline-dark btAddToCart custom-link" 
                        data-name="${item.name}" 
                        data-price="${item.price.toFixed(2)}" data-dealer="${item.dealer}">
                        R$ ${item.price.toFixed(2)}
                        </button>
                    </div>
                </div>
                `;
                gameCardContainerBandai.innerHTML += gameCard;
            }     
    });

///container Ubisoft

    //construção do titulo dos cards(Loja)
        const gameCardContainerTitleUbisoft = `
            <div class="d-flex justify-content-between cards-container-title mb-3 align-items-center">

                <h3 class="h3 text-white">Ubisoft</h3>

                <a href="tudo.php" class="btn btn custom-link btn-sm active rounded" role="button" aria-pressed="true">Ver mais</a>

            </div>
            `;

    gameCardContainerUbisoft.innerHTML += gameCardContainerTitleUbisoft;

    jogosJson.forEach((item) => {
            if (item.dealer == 'Ubisoft') {
                const gameCard = `
                <div class="card gameCard" id="${item.id}"
                    <a href="#" class="">
                        <img  src="${item.img}" class="card-image" alt="...">
                        <div class="card-body p-1">
                            <img  src="./imagens/assets/plataformas.png"> 
                            <h5 class="card-title h5 my-1">${item.name}</h5>
                            <p class="card-text mb-2">${item.dealer}</p>
                        </div>
                    </a>
                    <div class="mx-1 mb-1">
                        <button href="#" type="button" class="btn btn-block btn-outline-dark btAddToCart custom-link" 
                        data-name="${item.name}" 
                        data-price="${item.price.toFixed(2)}" data-dealer="${item.dealer}">
                        R$ ${item.price.toFixed(2)}
                        </button>
                    </div>
                </div>
                `;
                gameCardContainerUbisoft.innerHTML += gameCard;
            }     
    });

///container promo

    //construção do titulo dos cards(Loja)
    const gameCardContainerTitlePromo = `
    <div class="d-flex justify-content-between cards-container-title mb-3 align-items-center">

        <h3 class="h3 text-white">A preço de banana</h3>

        <a href="tudo.php" class="btn btn custom-link btn-sm active rounded" role="button" aria-pressed="true">Ver mais</a>

    </div>
    `;

gameCardContainerPromo.innerHTML += gameCardContainerTitlePromo;

jogosJson.forEach((item) => {
    if (item.id > 8 && item.id < 17 ) {
        const gameCard = `
        <div class="card gameCard" id="${item.id}"
            <a href="#" class="">
                <img  src="${item.img}" class="card-image" alt="...">
                <div class="card-body p-1">
                    <img  src="./imagens/assets/plataformas.png"> 
                    <h5 class="card-title h5 my-1">${item.name}</h5>
                    <p class="card-text mb-2">${item.dealer}</p>
                </div>
            </a>
            <div class="mx-1 mb-1">

                <button href="#" type="button" class="btn btn-block btn-outline-dark btAddToCart custom-link" data-name="${item.name}" data-dealer="${item.dealer}" data-price="${item.price.toFixed(2)}">R$ ${item.price.toFixed(2)}</button>
            </div>
        </div>
        `;
        gameCardContainerPromo.innerHTML += gameCard;
    }     
});

/// Adicionar evento aos botões de adicionar ao carrinho 

document.addEventListener('click', function(event) { 
    if (event.target.classList.contains('btAddToCart')) 
        
        { const name = event.target.getAttribute('data-name'); 

        const price = event.target.getAttribute('data-price');
        const dealer = event.target.getAttribute('data-dealer');
        
        addToCart(name, price, dealer); } 
    });




/// Adicinando cards(carrinho)

function addToCart(name, price, dealer){
    const cartItem = `
    <div class="card">
        <div class="card-header"> 
            <img  src="./imagens/assets/plataformas.png"> 
        </div>
        <div class="card-body p-2">
            <h5 class="card-title">${name}</h5>
            <p class="card-text mb-2">${dealer}</p>
            <a href="#" class="btn btn-dark custom-link border-dark text-dark">R$ ${price}</a>
        </div>
    </div>`;

    cartItensContainer.innerHTML += cartItem;
}