const gameCardContainerDefault = document.getElementById('gameCardContainer-default');

const cartItensContainer = document.getElementById('cartItensContainer');


///container default

        //construção do titulo dos cards(Loja)
        const gameCardContainerTitleDefault = `
        <div class="d-flex justify-content-between cards-container-title mb-3 align-items-center">

        

        </div>
        `;

    gameCardContainerDefault.innerHTML += gameCardContainerTitleDefault;

    jogosJson.forEach((item) => {
            const gameCard = `
            <div class="card gameCard" data-name="${item.name}"
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
                    data-dealer="${item.dealer}"
                    data-price="${item.price}">RS ${item.price}
                    </button>
                </div>
            </div>
            `;
            gameCardContainerDefault.innerHTML += gameCard;
        }     
    );


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


/// mostra os elementos correspondentes a busca ()

document.getElementById('search-bt').addEventListener('click', function() {

    // Obtém o valor da barra de pesquisa
    const searchTerm = document.getElementById('searhBar').value.toLowerCase();

    // Obtém todos os cards
    const cards = document.querySelectorAll('.gameCard');

    // Itera sobre cada card
    cards.forEach(function(card) {

        // Obtém o nome do card (assumimos que o nome está no atributo 'data-name')

        const cardName = card.getAttribute('data-name').toLowerCase();

        // Verifica se o nome do card contém o termo de pesquisa
        if (cardName.includes(searchTerm)) {
            // Se encontrar, exibe o card
            card.style.display = 'flex';
        } else {
            // Caso contrário, esconde o card
            card.style.display = 'none';
        }
    });
});