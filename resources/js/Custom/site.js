'use strict';

export default {
    /**
     * Инициируем событие изменения корзины
     * Пользовательское события для отслеживания изменения корзины ('cart') в локальном хранилище(localStorage)
     */
    setLocalStorageEventCart() {
        window.dispatchEvent(new CustomEvent('cart-localstorage-changed', {
            detail: {
                storage: localStorage.getItem('cart')
            }
        }));
    },

    // -----------------------------
    // Кол-во товара - начало
    // -----------------------------

    // Уменьшение
    decreaseButton(event) {
        let value = 0;
        event.preventDefault();
        let input = event.target.nextElementSibling.children[0];
        if (input.dataset.counter !== undefined) {
            value = parseInt(String(input.value), 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? (value = 1) : "";
            value--;
            input.value = value;
        }

        return value;
    },

    // Увеличение
    increaseButton(event) {
        let value = 0;
        event.preventDefault();
        let input = event.target.previousElementSibling.children[0];
        if (input.dataset.counter !== undefined) {
            value = parseInt(String(input.value), 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        return value;
    },

    // -----------------------------
    // Кол-во товара - конец
    // -----------------------------

    /**
     * Изменение количества товара в корзине на стороне браузера
     */
    changeQtyToCart(product, qty) {

        // Корзина
        let cart = localStorage.getItem('cart');

        // Добавляемый продукт
        let newProduct = [{
            'id'   : product.id,
            'img'  : product.prev_img,
            'title': product.title,
            'slug' : product.slug,
            'price': product.price,
            'qty'  : qty,
        }];

        // Корзина пустая
        if (!cart) {
            localStorage.setItem('cart', JSON.stringify(newProduct));
        } else {
            cart = JSON.parse(cart);

            cart.forEach(productInCart => {
                // Если товар уже есть в корзине, то меняем только кол-во
                if (+productInCart.id === +product.id) {
                    productInCart.qty += qty;
                    newProduct = null;
                }
            });

            // Добавление товара
            Array.prototype.push.apply(cart, newProduct);
            // Запись в хранилище в браузере
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        this.setLocalStorageEventCart();
    },

    /**
     * Удаление товара из корзины
     */
    deleteCartProduct(product) {
        // Корзина
        let cart = localStorage.getItem('cart');

        cart = JSON.parse(cart);

        // Отфильтровываем только те товары, у которых не совпадает ID с переданным товаром
        cart = cart.filter(function (productInCart) {
            return +productInCart.id !== +product.id;
        });

        // Запись в хранилище в браузере
        localStorage.setItem('cart', JSON.stringify(cart));
        // Инициируем событие изменения корзины
        this.setLocalStorageEventCart();
    },
}
