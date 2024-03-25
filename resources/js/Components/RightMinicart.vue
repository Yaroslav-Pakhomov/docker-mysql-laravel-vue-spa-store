<script>
import {Link} from '@inertiajs/vue3';

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
    },

    props: {
        product: Object,
    },

    mounted() {
        // Имитация события изменения в теге body
        let body = document.querySelector('body');
        let event_change = new Event('change');
        body.dispatchEvent(event_change);
    },

    data() {
        return {}
    },

    methods: {
        // Номер итерации
        checkedIter(iter) {
            return Number(iter) === 0;
        },

        // -----------------------------
        // Кол-во товара - начало
        // -----------------------------

        increaseButton(event) {
            event.preventDefault();
            let input = event.target.previousElementSibling.children[0];
            if (input.dataset.counter !== undefined) {
                let value = parseInt(String(input.value), 10);
                value = isNaN(value) ? 0 : value;
                value++;
                input.value = value;
            }
        },
        decreaseButton(event) {
            event.preventDefault();
            let input = event.target.nextElementSibling.children[0];
            if (input.dataset.counter !== undefined) {
                let value = parseInt(String(input.value), 10);
                value = isNaN(value) ? 0 : value;
                value < 1 ? (value = 1) : "";
                value--;
                input.value = value;
            }
        },

        // -----------------------------
        // Кол-во товара - конец
        // -----------------------------
    },

    computed: {}
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
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img
                        src="/site/assets/img/product/small-product/product1.webp"
                        alt="product-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">Car & Motorbike Care.</a></h4>
                    <span class="color__variant"><b>Color:</b> Beige</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">$125.00</span>
                        <span class="minicart__old--price">$140.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    @click="decreaseButton"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    @click="increaseButton"
                                    value="Increase Value">+
                            </button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img
                        src="/site/assets/img/product/small-product/product2.webp"
                        alt="product-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">Engine And Drivetrain.</a></h4>
                    <span class="color__variant"><b>Color:</b> Green</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">$115.00</span>
                        <span class="minicart__old--price">$130.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    @click="decreaseButton"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    @click="increaseButton"
                                    value="Increase Value">+
                            </button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Sub Total:</span>
                <span><b>$240.00</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>$240.00</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <input class="minicart__conditions--input" id="accept" type="checkbox">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                class="minicart__conditions--link" href="privacy-policy.html">Privacy Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">
            <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
            <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

</template>
