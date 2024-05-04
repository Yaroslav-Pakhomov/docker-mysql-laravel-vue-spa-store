<script>
import {Head, Link} from '@inertiajs/vue3';
import StoreLayout from "@/Layouts/StoreLayout.vue";
import Site from "@/Custom/site.js";

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
    },

    data() {
        return {
            cart_products        : [],
            email                : '',
            surname              : '',
            name                 : '',
            patronymic           : '',
            company_name         : '',
            address              : '',
            apartment            : '',
            city                 : '',
            selected_country     : '',
            post_code            : '',
            surname_fact         : '',
            name_fact            : '',
            patronymic_fact      : '',
            company_name_fact    : '',
            address_fact         : '',
            apartment_fact       : '',
            selected_country_fact: '',
            country_fact         : '',
            post_code_fact       : '',
            notes                : '',
        };
    },

    methods: {
        /**
         * Итого для товара
         */
        totalProduct(price, qty) {
            return (Number(price) * Number(qty)).toFixed(2);
        },

        checkoutNow() {
            // Корзина
            let cart = localStorage.getItem('cart');
            cart = JSON.parse(cart);
            console.log(cart);
            console.log(this.cart_products);

            const laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            // const headers = {
            //     "X-CSRF-TOKEN": laravelToken,
            // };

            let countries = {
                1: 'India',
                2: 'United',
                3: 'Netherlands',
                4: 'Afghanistan',
                5: 'Islands',
                6: 'Albania',
                7: 'Antigua',
                8: 'Russia',
            };

            const data = {
                '_token'               : laravelToken,
                'cart_products'        : this.cart_products,
                'email'                : this.email,
                'surname'              : this.surname,
                'name'                 : this.name,
                'patronymic'           : this.patronymic,
                'company_name'         : this.company_name,
                'address'              : this.address,
                'apartment'            : this.apartment,
                'city'                 : this.city,
                'selected_country'     : countries[+this.selected_country],
                'post_code'            : this.post_code,
                'surname_fact'         : this.surname_fact,
                'name_fact'            : this.name_fact,
                'patronymic_fact'      : this.patronymic_fact,
                'company_name_fact'    : this.company_name_fact,
                'address_fact'         : this.address_fact,
                'apartment_fact'       : this.apartment_fact,
                'city_fact'            : this.city_fact,
                'selected_country_fact': countries[+this.selected_country_fact],
                'post_code_fact'       : this.post_code_fact,
                'notes'                : this.notes,
            };

            this.$inertia.post(this.route('site.order.saveOrder'), data);

            // console.log(this.email);
            // console.log(this.surname);
            // console.log(this.name);
            // console.log(this.patronymic);
            // console.log(this.company_name);
            // console.log(this.address);
            // console.log(this.apartment);
            // console.log(this.city);
            // console.log(this.selected_country);
            // console.log(this.post_code);
            // console.log(this.surname_fact);
            // console.log(this.name_fact);
            // console.log(this.patronymic_fact);
            // console.log(this.company_name_fact);
            // console.log(this.address_fact);
            // console.log(this.apartment_fact);
            // console.log(this.city_fact);
            // console.log(this.country_fact);
            // console.log(this.post_code_fact);
            // console.log(this.notes);
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
                            <h1 class="breadcrumb__content--title mb-25"> Заказ</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a :href="route('site.index')">Главная</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span>Оформление заказа</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start checkout page area -->
        <div class="checkout__page--area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="main checkout__mian">
                            <form action="#">
                                <div class="checkout__content--step section__contact--information">
                                    <div
                                        class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                        <h2 class="section__header--title h3">Контактная информация</h2>
                                        <p class="layout__flex--item">
                                            У вас уже есть аккаунт?
                                            <a class="layout__flex--item__link" href="login.html">Log in</a>
                                        </p>
                                    </div>
                                    <div class="customer__information">
                                        <div class="checkout__email--phone mb-12">
                                            <label>
                                                Ваша почта <span class="checkout__input--label__star">*</span>
                                                <input name="email" v-model="email"
                                                       class="checkout__input--field border-radius-5"
                                                       placeholder="Email (обязательно)" type="text">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__content--step section__shipping--address">
                                    <div class="section__header mb-25">
                                        <h2 class="section__header--title h3">Платежные реквизиты</h2>
                                    </div>
                                    <div class="section__shipping--address__content">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input2">Фамилия
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <input name="surname" v-model="surname"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Фамилия (обязательно)" id="input2" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                                <div class="checkout__input--list ">
                                                    <label class="checkout__input--label mb-1" for="input1">Имя <span
                                                        class="checkout__input--label__star">*</span></label>
                                                    <input name="name" v-model="name"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Имя (необязательно)" id="input1" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input2">Отчество
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <input name="patronymic" v-model="patronymic"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Отчество (необязательно)" id="input2"
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input3">Название
                                                        компании <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input name="company_name" v-model="company_name"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Название компании (необязательно)" id="input3"
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input4">Адрес <span
                                                        class="checkout__input--label__star">*</span></label>
                                                    <input name="address" v-model="address"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Адрес (юридический)" id="input4" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="checkout__input--list">
                                                    <input name="apartment" v-model="apartment"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Апартаменты, кв. и т.д. (необязательно)"
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input5">Город/Населённый
                                                        пункт <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input name="city" v-model="city"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Город" id="input5" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="country">Страна/регион
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <div class="checkout__input--select select">
                                                        <select name="selected_country" v-model="selected_country"
                                                                class="checkout__input--select__field border-radius-5"
                                                                id="country">
                                                            <option value="1">India</option>
                                                            <option value="2">United States</option>
                                                            <option value="3">Netherlands</option>
                                                            <option value="4">Afghanistan</option>
                                                            <option value="5">Islands</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">Antigua Barbuda</option>
                                                            <option value="8">Russia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-1" for="input6">Почтовый
                                                        Индекс <span
                                                            class="checkout__input--label__star">*</span></label>
                                                    <input name="post_code" v-model="post_code"
                                                           class="checkout__input--field border-radius-5"
                                                           placeholder="Индекс (необязательно)" id="input6" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <details>
                                        <summary class="checkout__checkbox mb-3">
                                            <input class="checkout__checkbox--input" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <span class="checkout__checkbox--label">Отправить по другому адресу?</span>
                                        </summary>
                                        <div class="section__shipping--address__content">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input9">Фамилия
                                                            <span class="checkout__input--label__star">*</span></label>
                                                        <input name="surname_fact" v-model="surname_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Фамилия (обязательно)" id="input9"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                                    <div class="checkout__input--list ">
                                                        <label class="checkout__input--label mb-1" for="input7">Имя
                                                            <span class="checkout__input--label__star">*</span></label>
                                                        <input name="name_fact" v-model="name_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Имя (необязательно)" id="input7"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input8">Отчество
                                                            <span class="checkout__input--label__star">*</span></label>
                                                        <input name="patronymic_fact" v-model="patronymic_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Отчество (необязательно)" id="input8"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input9">Название
                                                            компании <span class="checkout__input--label__star">*</span></label>
                                                        <input name="company_name_fact" v-model="company_name_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Название компании (необязательно)"
                                                               id="input9" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input10">Адрес
                                                            <span class="checkout__input--label__star">*</span></label>
                                                        <input name="address_fact" v-model="address_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Адрес (фактический)" id="input10"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="checkout__input--list">
                                                        <input name="apartment_fact" v-model="apartment_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Апартаменты, кв. и т.д. (необязательно)"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input11">Город/Населённый
                                                            пункт <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <input name="city_fact" v-model="city_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Город" id="input11" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="country2">Страна/Регион
                                                            <span class="checkout__input--label__star">*</span></label>
                                                        <div class="checkout__input--select select">
                                                            <select name="country_fact" v-model="selected_country_fact"
                                                                    class="checkout__input--select__field border-radius-5"
                                                                    id="country2">
                                                                <option value="1">India</option>
                                                                <option value="2">United States</option>
                                                                <option value="3">Netherlands</option>
                                                                <option value="4">Afghanistan</option>
                                                                <option value="5">Islands</option>
                                                                <option value="6">Albania</option>
                                                                <option value="7">Antigua Barbuda</option>
                                                                <option value="8">Russia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="checkout__input--list">
                                                        <label class="checkout__input--label mb-1" for="input12">Почтовый
                                                            Индекс <span
                                                                class="checkout__input--label__star">*</span></label>
                                                        <input name="post_code_fact" v-model="post_code_fact"
                                                               class="checkout__input--field border-radius-5"
                                                               placeholder="Индекс (необязательно)" id="input12"
                                                               type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </details>
                                    <div class="checkout__checkbox">
                                        <input class="checkout__checkbox--input" id="checkbox2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label" for="checkbox2">
                                            Сохраните эту информацию для следующего раза</label>
                                    </div>
                                </div>
                                <div class="order-notes mb-3">
                                    <label class="checkout__input--label mb-1" for="order">Комментарий к заказу <span
                                        class="checkout__input--label__star">*</span></label>
                                    <textarea name="notes" v-model="notes"
                                              class="checkout__notes--textarea__field border-radius-5" id="order"
                                              placeholder="Примечания к вашему заказу, например, специальные примечания к доставке."
                                              spellcheck="false"></textarea>
                                </div>
                                <div class="checkout__content--step__footer d-flex align-items-center">
                                    <a class="continue__shipping--btn primary__btn border-radius-5"
                                       :href="route('site.shop.index')">В магазин</a>
                                    <a class="previous__link--content" :href="route('site.cart.index')">В корзину</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <aside class="checkout__sidebar sidebar border-radius-10">
                            <h2 class="checkout__order--summary__title text-center mb-15">Краткое описание вашего
                                заказа</h2>
                            <div class="cart__table checkout__product--table">
                                <table class="cart__table--inner">
                                    <tbody class="cart__table--body">
                                    <template v-for="cart_product in cart_products" :key="cart_product.id">
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a class="display-block"
                                                           :href="route('site.product.show', cart_product.slug)"><img
                                                            class="display-block border-radius-5"
                                                            :src="cart_product.img" :alt="cart_product.title"></a>
                                                        <span class="product__thumbnail--quantity">{{
                                                                cart_product.qty
                                                            }}</span>
                                                    </div>
                                                    <div class="product__description">
                                                        <h4 class="product__description--name"><a
                                                            :href="route('site.product.show', cart_product.slug)">{{
                                                                cart_product.title
                                                            }}</a></h4>
                                                        <span class="product__description--variant">COLOR: Blue</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$ {{
                                                        totalProduct(cart_product.price, cart_product.qty)
                                                    }} </span>
                                            </td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout__discount--code">
                                <form class="d-flex" action="#">
                                    <label>
                                        <input class="checkout__discount--code__input--field border-radius-5"
                                               placeholder="Gift card or discount code" type="text">
                                    </label>
                                    <button class="checkout__discount--code__btn primary__btn border-radius-5"
                                            type="submit">Apply
                                    </button>
                                </form>
                            </div>
                            <div class="checkout__total">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                    <tr class="checkout__total--items">
                                        <td class="checkout__total--title text-left">Subtotal</td>
                                        <td class="checkout__total--amount text-right">$ {{
                                                total_price_cart_products
                                            }}
                                        </td>
                                    </tr>
                                    <tr class="checkout__total--items">
                                        <td class="checkout__total--title text-left">Shipping</td>
                                        <td class="checkout__total--calculated__text text-right">Calculated at next
                                            step
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                    <tr class="checkout__total--footer__items">
                                        <td class="checkout__total--footer__title checkout__total--footer__list text-left">
                                            Total
                                        </td>
                                        <td class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                            $ {{ total_price_cart_products }}
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment__history mb-30">
                                <h3 class="payment__history--title mb-20">Payment</h3>
                                <ul class="payment__history--inner d-flex">
                                    <li class="payment__history--list">
                                        <button class="payment__history--link primary__btn" type="submit">Credit Card
                                        </button>
                                    </li>
                                    <li class="payment__history--list">
                                        <button class="payment__history--link primary__btn" type="submit">Bank
                                            Transfer
                                        </button>
                                    </li>
                                    <li class="payment__history--list">
                                        <button class="payment__history--link primary__btn" type="submit">Paypal
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <button @click.prevent="checkoutNow()" class="checkout__now--btn primary__btn"
                                    type="submit">Оформить сейчас
                            </button>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End checkout page area -->

    </StoreLayout>
</template>

<style scoped>

</style>
