<script>
import {Head, Link} from '@inertiajs/vue3';
import StoreLayout  from "@/Layouts/StoreLayout.vue";
import Site         from "@/Custom/site.js";

export default {
    // Название компонента
    name: 'IndexPage',

    // Подключенные компоненты
    components: {
        Head,
        Link,
        StoreLayout,
        Site,
    },

    // Передаваемые св-ва от родителя и/или от контроллера
    props: {
        categories: Array,
        active    : Boolean,
        reset_cart    : Boolean,
    },

    mounted() {
        // Имитация события изменения в теге body
        let body = document.querySelector('body');
        let event_change = new Event('change');
        body.dispatchEvent(event_change);

        // Слушатель события изменения корзины
        window.addEventListener('cart-localstorage-changed', (event) => {
            this.cart_products = JSON.parse(event.detail.storage);
        });

        Site.setLocalStorageEventCart();

        if (this.reset_cart) {
            console.log(this.cart_products)
            console.log(this.reset_cart)
            this.clearCart();
        }
    },

    data() {
        return {
            cart_products: [],
        };
    },

    methods: {
        /**
         * Итого для товара
         */
        totalProduct(price, qty) {
            return (Number(price) * Number(qty)).toFixed(2);
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

        /**
         * Удаление всех товаров из корзины
         */
        clearCart() {
            localStorage.setItem('cart', JSON.stringify([]));

            Site.setLocalStorageEventCart();
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
    },


}

</script>

<template>
    <StoreLayout :categories="categories" :cartActive="active">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25"> Корзина</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a :href="route('site.index')">Главная</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span>Корзина магазина</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container-fluid">
                <div class="cart__section--inner">
                    <form action="#">
                        <h2 class="cart__title mb-30">Выбранные товары</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cart__table">
                                    <div v-if="cart_products.length > 0">
                                        <table class="cart__table--inner">
                                            <thead class="cart__table--header">
                                                <tr class="cart__table--header__items">
                                                <th class="cart__table--header__list">Товар</th>
                                                <th class="cart__table--header__list">Цена</th>
                                                <th class="cart__table--header__list">Количество</th>
                                                <th class="cart__table--header__list">Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody class="cart__table--body">
                                                <template v-for="cart_product in cart_products" :key="cart_product.id">
                                                <tr class="cart__table--body__items">
                                                    <td class="cart__table--body__list">
                                                        <div class="cart__product d-flex align-items-center">
                                                            <button
                                                                @click.prevent="deleteCartProduct(cart_product)"
                                                                class="cart__remove--btn" aria-label="search button"
                                                                type="button">
                                                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 24 24" width="16px" height="16px">
                                                                    <path
                                                                        d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/>
                                                                </svg>
                                                            </button>
                                                            <div class="cart__thumbnail">
                                                                <a :href="route('site.product.show', cart_product.slug)">
                                                                    <img class="border-radius-5" :src="cart_product.img"
                                                                         :alt="cart_product.title">
                                                                </a>
                                                            </div>
                                                            <div class="cart__content">
                                                                <h3 class="cart__content--title h4">
                                                                    <a :href="route('site.product.show', cart_product.slug)">{{
                                                                            cart_product.title
                                                                        }}</a>
                                                                </h3>
                                                                <span class="cart__content--variant">COLOR: Blue</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price">$ {{ cart_product.price }}</span>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <div class="quantity__box">
                                                            <button type="button"
                                                                    class="quantity__value quickview__value--quantity decrease"
                                                                    aria-label="quantity value"
                                                                    @click="(event) => decreaseButton(event, cart_product)"
                                                                    value="Decrease Value">-
                                                            </button>
                                                            <label>
                                                                <input type="number"
                                                                       class="quantity__number quickview__value--number"
                                                                       :value="cart_product.qty" data-counter/>
                                                            </label>
                                                            <button type="button"
                                                                    class="quantity__value quickview__value--quantity increase"
                                                                    aria-label="quantity value"
                                                                    @click="(event) => increaseButton(event, cart_product)"
                                                                    value="Increase Value">+
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price end">$ {{
                                                                totalProduct(cart_product.price, cart_product.qty)
                                                            }}</span>
                                                    </td>
                                                </tr>
                                            </template>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div v-else>
                                        <p>Ваша корзина пуста.</p>
                                    </div>
                                    <div class="continue__shopping d-flex justify-content-between">
                                        <a class="continue__shopping--link" :href="route('site.shop.index')">Продолжить покупки</a>
                                        <button @click.prevent="clearCart()" class="continue__shopping--clear" type="submit">Очистить корзину</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cart__summary border-radius-10">
                                    <div class="coupon__code mb-30">
                                        <h3 class="coupon__code--title">Купон</h3>
                                        <p class="coupon__code--desc">Введите свой код купона, если он у вас есть.</p>
                                        <div class="coupon__code--field d-flex">
                                            <label>
                                                <input class="coupon__code--field__input border-radius-5"
                                                       placeholder="Код купона" type="text">
                                            </label>
                                            <button class="coupon__code--field__btn primary__btn" type="submit">Применить купон</button>
                                        </div>
                                    </div>
                                    <div class="cart__note mb-20">
                                        <h3 class="cart__note--title">Примечание</h3>
                                        <p class="cart__note--desc">Добавьте специальные инструкции для вашего продавца...</p>
                                        <textarea class="cart__note--textarea border-radius-5"></textarea>
                                    </div>
                                    <div class="cart__summary--total mb-20">
                                        <table class="cart__summary--total__table">
                                            <tbody>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">ПРОМЕЖУТОЧНЫЙ ИТОГ</td>
                                                <td class="cart__summary--amount text-right">$
                                                    {{ total_price_cart_products }}
                                                </td>
                                            </tr>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">ОБЩИЙ ИТОГ</td>
                                                <td class="cart__summary--amount text-right">$
                                                    {{ total_price_cart_products }}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart__summary--footer">
                                        <p class="cart__summary--footer__desc">Доставка и налоги рассчитываются при оформлении заказа</p>
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <button class="cart__summary--footer__btn primary__btn cart"
                                                        type="submit">Обновить корзину
                                                </button>
                                            </li>
                                            <li><a class="cart__summary--footer__btn primary__btn checkout"
                                                   :href="route('site.checkout.index')">Оформить</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- cart section end -->

    </StoreLayout>
</template>

<style scoped>

</style>
