<script>
import {Link} from '@inertiajs/vue3';
import Site   from "@/Custom/site.js";

/**
 * @typedef {Object} product
 * @property {string} title
 * @property {string} slug
 * @property {string} description
 * @property {string} prev_img
 * @property {string} main_img
 * @property {float} price
 * @property {float} old_price
 * @property {Object} colors
 * @property {Object} tags
 * @property {Object} category
 * @property {string} category.title
 */

export default {

    name: 'RightMinicart',

    components: {
        Link,
        Site,
    },

    // Передаваемые св-ва от родителя и/или от контроллера
    props: {
        cart_products: Array,
    },

    // Передаваемые методы от родителя
    emits: [],

    mounted() {
        // Имитация события изменения в теге body
        let body = document.querySelector('body');
        let event_change = new Event('change');
        body.dispatchEvent(event_change);

        Site.setLocalStorageEventCart();
    },

    data() {
        return {
            // cart_products: [],
        }
    },

    methods: {
        // Номер итерации
        checkedIter(iter) {
            return Number(iter) === 0;
        },

        // -----------------------------
        // Кол-во товара - начало
        // -----------------------------

        // Уменьшение
        decreaseButton(event, product) {
            Site.decreaseButton(event);
            let input = event.target.nextElementSibling.children[0];
            if (input.dataset.counter !== undefined) {
                Site.changeQtyToCart(product, -1);
            }
        },
        // Увеличение
        increaseButton(event, product) {
            Site.increaseButton(event);
            let input = event.target.previousElementSibling.children[0];
            if (input.dataset.counter !== undefined) {
                Site.changeQtyToCart(product, 1);
            }
        },

        // -----------------------------
        // Кол-во товара - конец
        // -----------------------------

        /**
         * Удаление товара из корзины
         */
        deleteCartProduct(product) {
            Site.deleteCartProduct(product);
        },
    },

    computed: {
        total_price_cart_products() {
            let total = 0;
            for (let cart_product of this.cart_products) {
                total += (Number(cart_product.price) * Number(cart_product.qty));
            }
            return total.toFixed(2);
        },
    }
};

</script>

<template>

    <!-- Start offCanvas minicart -->
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Корзина покупок</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">Ассортимент органических продуктов ограничен</p>
        </div>
        <div class="minicart__product">
            <template v-for="cart_product in cart_products" :key="cart_product.id">
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a :href="route('site.product.show', cart_product.slug)">
                            <img :src="cart_product.img" :alt="cart_product.title">
                        </a>
                    </div>
                    <div class="minicart__text">
                        <h4 class="minicart__subtitle"><a
                            :href="route('site.product.show', cart_product.slug)">{{ cart_product.title }}</a></h4>
                        <span class="color__variant"><b>Color:</b> Beige</span>
                        <div class="minicart__price">
                            <span class="minicart__current--price">${{ cart_product.price }}</span>
                            <!--                            <span class="minicart__old&#45;&#45;price">$140.00</span>-->
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                        @click="(event) => decreaseButton(event, cart_product)"
                                        value="Decrease Value">-
                                </button>
                                <label>
                                    <input type="number" class="quantity__number" :value="cart_product.qty"
                                           data-counter/>
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value"
                                        @click="(event) => increaseButton(event, cart_product)"
                                        value="Increase Value">+
                                </button>
                            </div>
                            <button @click.prevent="deleteCartProduct(cart_product)" class="minicart__product--remove"
                                    type="button">Remove
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Sub Total:</span>
                <span><b>$ {{ total_price_cart_products }}</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>$ {{ total_price_cart_products }}</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <input class="minicart__conditions--input" id="accept" type="checkbox">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                class="minicart__conditions--link" href="privacy-policy.html">Privacy Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">
            <a class="primary__btn minicart__button--link" :href="route('site.cart.index')">Корзина</a>
            <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

</template>
