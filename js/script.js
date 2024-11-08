const gameCardContainer = document.getElementById('gameCardContainer');
const cartItensContainer = document.getElementById('cartItensContainer');

const cartNumber = document.getElementById('cart-number');

const cardDisplay = document.getElementById('CartSupportedContent');

//funções básicas



//construção dos cards(Loja)

jogosJson.forEach((item) => {
        const gameCard = `
        <div class="card bg-dark gameCard" id="${item.id}"
            <a href="#" class="text-light">
                <img  src="${item.img}" class="card-image" alt="...">
                <div class="card-body p-1">
                    <h5 class="card-title h5 my-2">${item.name}</h5>
                    <p class="card-text mb-3">${item.dealer}</p>
                </div>
            </a>
            <div class="card-elements-shop mx-1 mb-1">
                <span class="btn btn-danger p-1 area-b btn-sm"></span>
                <button href="#" class="btn area-c btn-sm btn btn-outline-light btAddToCart" data-name="${item.name}" data-price="${item.price}">RS ${item.price}</button>
            </div>
        </div>
        `;
        gameCardContainer.innerHTML += gameCard;
});

// Adicionar evento aos botões de adicionar ao carrinho 

document.addEventListener('click', function(event) { 
    if (event.target.classList.contains('btAddToCart')) 
        
        { const name = event.target.getAttribute('data-name'); 

        const price = event.target.getAttribute('data-price'); 
        addToCart(name, price); } 
    });

//adicinando cards(carrinho)

function addToCart(name, price){
    const cartItem = `
    <div class="card bg-dark gameCard mb-3"> 
        <a href="#" class="text-light">  
            <div class="card-body p-1"> 
                <h5 class="card-title h5 my-2">${name}</h5>  
            </div> 
        </a> 
        <div class="card-elements-shop mx-1 mb-1">  
            <span class="btn btn-sm btn d-block btn-outline-light">R$ ${price}</span> 
        </div> 
    </div> `;

    cartItensContainer.innerHTML += cartItem;
}
