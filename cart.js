// cart.js

// Массив, где будем хранить выбранные товары
let cartItems = [];

// Функция для добавления товара в корзину
function addToCart(product) {
    cartItems.push(product);
    updateCart();
}

// Функция для обновления отображения корзины
function updateCart() {
    const cartContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    // Очистим содержимое корзины
    cartContainer.innerHTML = '';

    let total = 0;

    // Добавим выбранные товары в корзину и вычислим общую стоимость
    cartItems.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.innerHTML = `<div class="cart-item">${item.title} - $${item.price}</div>`;
        cartContainer.appendChild(cartItem);
        total += item.price;
    });

    // Обновим общую стоимость
    cartTotal.textContent = total.toFixed(2);
}

// Добавим обработчик клика на кнопку "Оформить заказ"
const checkoutButton = document.getElementById('checkout-button');
checkoutButton.addEventListener('click', checkout);

// Функция для оформления заказа
function checkout() {
    // Здесь вы можете реализовать логику оформления заказа, например, отправку заказа на сервер и т.д.
    // На данный момент она пуста, и вы можете добавить необходимую логику.
    alert('Ваш заказ оформлен! Спасибо за покупку.');
    // После оформления заказа можно очистить корзину
    cartItems = [];
    updateCart();
}
