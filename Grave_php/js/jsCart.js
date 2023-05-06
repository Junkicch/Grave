// Seleciona todos os botões "Adicionar ao carrinho"
var addToCartButtons = document.querySelectorAll('.add-to-cart');
// Seleciona o elemento do carrinho
        const cart = document.querySelector('.cart');
// Adiciona um evento de clique a cada botão "Adicionar ao carrinho"
        addToCartButtons.forEach(function(button) {
        button.addEventListener('click', addToCartClicked);
                });
// Cria um novo item do carrinho
        const item = document.createElement('li');
        item.innerText = `${button.dataset.name} - R$${button.dataset.price}`;
        document.querySelector('.cart-items').appendChild(item);
// Adiciona um item ao carrinho quando o botão "Adicionar ao carrinho" é clicado
        function addToCartClicked(event) {
        var button = event.target;
                var item = {
                name: button.dataset.name,
                        price: button.dataset.price,
                        quantity: 1
                };
                addItemToCart(item);
                updateCartTotal();
                abrirCarrinho();
                
                }

// Adiciona um item ao carrinho
function addItemToCart(item) {
var cartItems = document.querySelector('.cart-items'); }

// Adiciona um item ao carrinho quando o botão "Adicionar ao carrinho" é clicado
function addToCartClicked(event) {
var button = event.target;
        var item = {
        name: button.dataset.name,
                price: button.dataset.price,
                quantity: 1
                };
// Verifica se o item já está no carrinho
        var cartItems = document.querySelectorAll('.cart-item');
        for (var i = 0; i < cartItems.length; i++) {
var cartItemName = cartItems[i].querySelector('.cart-item-name').innerText;
        if (cartItemName === item.name) {
// Atualiza a quantidade do item e o total no carrinho
var cartItemQuantity = cartItems[i].querySelector('.cart-item-quantity');
        var currentQuantity = parseInt(cartItemQuantity.innerText);
        cartItemQuantity.innerText = currentQuantity + 1;
        updateCartTotal();
        return;
        }
}
addItemToCart(item);
        updateCartTotal();
        }
//               '<?php include_once './conectarbd.php';' +
  //                          '$sql = "select * from tb_produto";' +
  //                          '$query = mysqli_query($conn, $sql)or die(mysqli_error($conn));' +
  //                          '$linhas = mysqli_fetch_array($query);' +
  //                          'if ($linhas[nome] === ' + item.name' +' && $linhas[preco] === 'item.price' +') {?>' +
  //                                  '<td>' +
  //                                      '<img id="img--card" src="<?php echo 'img/' . $linhas['imagem']; ?>" >' +
  //                                      '<div class="cart-item-name">
  //                                      <?php echo $linhas["nome"]; ?></div>' +
  //                                      '<div class="cart-item-quantity">1</div>' +
  //                                          '<div class="cart-item-price">
  //                                          <?php echo $linhas["preco"]; ?></div>' +
  //                                      '<?php
  //                                      if ($linhas["quantidade"] > 0) {
  //                                          ?>' +
  //                                          
  //                                          '<?php
  //                                      } else {
  //                                          echo "<label style='color:red; font-weight: bold; padding-top: 10px;'>Indisponível</label>";
  //                                      }
  //                                      ?>' +
  //                                      '</div>'+
  //                                      '</div>+
  //                                  '</td>'+
  //                                  '<?php
  //                              } while ($linhas = mysqli_fetch_array($query));
  //                              ?>' +
  //                              '<?php'+'
  //                          }' +
  //                          '?>'+
  //                     
  //                      '</tr>'+
//                    '</table>' -->
// Adiciona um item ao carrinho
function addItemToCart(item) {
var cartItemElement = document.createElement('li');
        cartItemElement.classList.add('cart-item');
        cartItemElement.innerHTML ='<table>' + '<tr>' + '<td align="center">Nome<\td>' + 
                '<td align="center">Qtde<\td>' + '<td align="center">Preço<\td>' + '<\tr>' +
                '<span class="cart-item-name" placeholder="X">' +
                item.name + '</span>' +
                //PERSONALIZE O BOTÂO DE REMOVER POR AQUI!!
                '<button class="cart-item-remove" >❌</button>' +
        '<span class="cart-item-quantity">1</span>' +
        //PERSONALIZE O BOTÂO DE ADD POR AQUI!!
        '<button class="cart-item-add">+</button>'+
        '<span class="cart-item-price"> ' + 
        item.price + ' </span>';
// Adiciona um evento de clique ao botão "Remover" do item no carrinho
        var removeButton = cartItemElement.querySelector('.cart-item-remove');
        removeButton.addEventListener('click', removeCartItem);
        var cartItems = document.querySelector('.cart-items');
        cartItems.appendChild(cartItemElement);
        // Adiciona um evento de clique ao botão "ADD" do item no carrinho
        var addButton = cartItemElement.querySelector('.cart-item-add');
        addButton.addEventListener('click', addCartItem);
        var cartItems = document.querySelector('.cart-items');
        cartItems.appendChild(cartItemElement);
        
        
        
        }

// Atualiza o total de compras no carrinho
function updateCartTotal() {
var cartItems = document.querySelectorAll('.cart-item');
        var total = 0;
        for (var i = 0; i < cartItems.length; i++) {
var cartItemQuantity = cartItems[i].querySelector('.cart-item-quantity');
        var cartItemPrice = cartItems[i].querySelector('.cart-item-price');
        var quantity = parseInt(cartItemQuantity.innerText);
        var price = parseFloat(cartItemPrice.innerText.replace('R$ ', ''));
        total += quantity * price;
        }
var totalElement = document.querySelector('.total-price');
        totalElement.innerText = 'Total: R$ ' + total.toFixed(2);
        }

// Remove um item do carrinho
function removeCartItem(event) {
var buttonClicked = event.target;
        var itemName = buttonClicked.parentElement.querySelector('.cart-item-name').innerText;
        var cartItems = document.querySelectorAll('.cart-item');
        for (var i = 0; i < cartItems.length; i++) {
if (cartItems[i].querySelector('.cart-item-name').innerText === itemName) {
var cartItemQuantity = cartItems[i].querySelector('.cart-item-quantity');
        var currentQuantity = parseInt(cartItemQuantity.innerText);
        if (currentQuantity > 1) {
cartItemQuantity.innerText = currentQuantity - 1;
} else {
cartItems[i].remove();
}
}
}
updateCartTotal();
        }

// ADD um item do carrinho
function addCartItem(event) {
var buttonClicked = event.target;
        var itemName = buttonClicked.parentElement.querySelector('.cart-item-name').innerText;
        var cartItems = document.querySelectorAll('.cart-item');
        for (var i = 0; i < cartItems.length; i++) {
if (cartItems[i].querySelector('.cart-item-name').innerText === itemName) {
var cartItemQuantity = cartItems[i].querySelector('.cart-item-quantity');
        var currentQuantity = parseInt(cartItemQuantity.innerText);
        if (currentQuantity >= 1) {
cartItemQuantity.innerText = currentQuantity + 1;
} else {
cartItems[i].add();
}
}
}
updateCartTotal();
        }
        
        const abrirCarrinho = () => {
    console.log('Qtd de itens no carrinho ' + cart.length)
    if(cart.length > 0) {
        // mostrar o carrinho
	    seleciona('aside').classList.add('show')
        seleciona('header').style.display = 'flex' // mostrar barra superior
    }

    // exibir aside do carrinho no modo mobile
    seleciona('.menu-openner').addEventListener('click', () => {
        if(cart.length > 0) {
            seleciona('aside').classList.add('show')
            seleciona('aside').style.left = '0'
        }
    })
}

const fecharCarrinho = () => {
    // fechar o carrinho com o botão X no modo mobile
    seleciona('.menu-closer').addEventListener('click', () => {
        seleciona('aside').style.left = '100vw' // usando 100vw ele ficara fora da tela
        seleciona('header').style.display = 'flex'
    })
}
        
    