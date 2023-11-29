var container = document.querySelector('.cards-container');

for (var i = 1; i < 9; i++) {

    // makes a div for each copy
    var card = document.createElement('div');
    card.classList.add('card');

    card.innerHTML = `
        <div class="card-body">
            <img src= '/Assets/Image_${i}.jpeg' class="images" height="100" width="100">
            <h5 class="card-title">Product ${i}</h5>
            <a class="prod-name">Prod Name</a>
            <p class="prod-price">$100</p>
            <a href=""> <img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
        </div>
    `;

    
    container.appendChild(card);
}