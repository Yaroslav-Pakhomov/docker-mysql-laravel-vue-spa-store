<script>
import {Head, Link}  from '@inertiajs/vue3';
import StoreLayout   from "@/Layouts/StoreLayout.vue";
import Pagination    from "@/Components/Pagination.vue";
import ModalProduct  from "@/Components/ModalProduct.vue";
import Filter        from "@/Components/Filter.vue";
import FilterSidebar from "@/Components/FilterSidebar.vue";
// import {createLogger} from "vite";

/**
 * @typedef {Object} products
 * @property {float} total
 * @property {Object} links
 * @property {Object} data
 * @typedef {Object} product
 * @property {string} title
 * @property {string} slug
 * @property {string} description
 * @property {string} prev_img
 * @property {string} main_img
 * @property {float} price
 * @property {float} old_price
 * @property {Object} category
 * @property {Object} colors
 * @property {Object} tags
 * @property {Array} categories_checked
 * @property {Array} colors_checked
 * @property {Array} tags_checked
 *
 */

const SORT_OBJ = {
    'recommended': 'Рекомендуемые',
    'top_sail'   : 'Самый продаваемый',
};

export default {
    /**
     * Название компонента
     */
    name: 'ShopIndexPage',

    /**
     * Подключенные компоненты
     */
    components: {
        ModalProduct,
        Head,
        Link,
        StoreLayout,
        Pagination,
        Filter,
        FilterSidebar,
    },

    /**
     * Передаваемые св-ва от родителя и/или от контроллера
     */
    props: {
        products      : Object,
        categories    : Array,
        request_filter: Object,
        active        : Boolean,
    },

    /**
     * Св-ва компонента
     */
    data() {
        return {
            productModal: {},
            sort_str    : 'Рекомендуемые',
            sort_param  : '',
        }
    },

    mounted() {
        // Имитация события изменения в теге body
        let body = document.querySelector('body');
        let event_change = new Event('change');
        body.dispatchEvent(event_change);

        this.checkSorting();
    },

    /**
     * Методы компонента
     */
    methods: {
        /**
         * Обработчик события вызова модального окна товара
         */
        openModalProduct(slug) {
            // Асинхронный запрос 2 способа
            // axios.get('/shop/' + product.slug)
            axios.get(this.route('site.shop.show', slug))
            // axios.get(this.route('site.shop.show', slug))
                .then(res => {
                    this.productModal = res.data;
                });
        },

        setSorting(param) {

            let size = Object.keys(this.request_filter).length;
            let all_filter = {};
            if (size > 0) {
                this.request_filter.sort = param;
                this.sort_param = param;
                all_filter = this.request_filter;
            } else {
                all_filter = {'sort': param};
            }

            this.$inertia.get('/shop', all_filter);
        },

        /**
         * Проверка на наличии параметра сортировки в объекте фильтрации
         */
        checkSorting() {
            // console.log(SORT_OBJ);
            if (this.request_filter.sort === 'recommended') {
                this.sort_str = 'Рекомендуемые';
                this.sort_param = 'recommended';
            }
            if (this.request_filter.sort === 'top_sail') {
                this.sort_str = 'Самый продаваемый';
                this.sort_param = 'top_sail';
            }
            if (this.request_filter.sort === 'alphabet_increase') {
                this.sort_str = 'По алфавиту, от А до Я';
                this.sort_param = 'alphabet_increase';
            }
            if (this.request_filter.sort === 'alphabet_decrease') {
                this.sort_str = 'По алфавиту, от Я до А';
                this.sort_param = 'alphabet_decrease';
            }
            if (this.request_filter.sort === 'price_increase') {
                this.sort_str = 'Цена от низкой к высокой';
                this.sort_param = 'price_increase';
            }
            if (this.request_filter.sort === 'price_decrease') {
                this.sort_str = 'Цена от высокой к низкой';
                this.sort_param = 'price_decrease';
            }
            if (this.request_filter.sort === 'date_increase') {
                this.sort_str = 'Дата, от старой к новой';
                this.sort_param = 'date_increase';
            }
            if (this.request_filter.sort === 'date_decrease') {
                this.sort_str = 'Дата, от новой к старой';
                this.sort_param = 'date_decrease';
            }
        },
    },

    computed: {},
}

</script>

<template>
    <StoreLayout :categories="categories" :shopActive="active">

        <!-- Start offcanvas filter sidebar -->
        <FilterSidebar :request_filter="request_filter" :sort_param="sort_param"/>
        <!-- End offcanvas filter sidebar -->

        <!-- Start shop section -->
        <div class="shop__section section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 shop-col-width-lg-4">
                        <Filter :request_filter="request_filter" :sort_param="sort_param"/>
                    </div>
                    <div class="col-xl-9 col-lg-8 shop-col-width-lg-8">
                        <div class="shop__right--sidebar">
                            <div class="shop__product--wrapper">
                                <div class="shop__header d-flex align-items-center justify-content-between mb-30">
                                    <div
                                        class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                        <span class="mobile-filter-icon me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="icon icon-filter">
                                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                            </svg>
                                        </span>
                                        <span class="mobile-filter-heading">Фильтрация и Сортировка</span>
                                    </div>
                                    <div class="product__view--mode d-flex align-items-center">
                                        <button class="widget__filter--btn d-flex d-lg-none align-items-center"
                                                data-offcanvas>
                                            <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="28"
                                                      d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/>
                                                <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="28"/>
                                                <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="28"/>
                                                <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="28"/>
                                            </svg>
                                            <span class="widget__filter--btn__text">Фильтр</span>
                                        </button>
                                        <div
                                            class="product__view--mode__list product__short--by align-items-center d-flex ">
                                            <label class="product__view--label">Prev Page :</label>
                                            <div class="select shop__header--select">
                                                <select class="product__view--select">
                                                    <option selected value="1">65</option>
                                                    <option value="2">40</option>
                                                    <option value="3">42</option>
                                                    <option value="4">57</option>
                                                    <option value="5">60</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="product__view--mode__list product__short--by align-items-center d-flex">
                                            <div class="filter-sorting">
                                                <!--                                                <div class="collection-sorting position-relative d-none d-lg-block">-->
                                                <div class="collection-sorting position-relative d-lg-block">
                                                    <div
                                                        class="sorting-header text_16 d-flex align-items-center justify-content-end">
                                                        <span class="sorting-title me-2">Сортировать:</span>
                                                        <span class="active-sorting">{{ sort_str }}</span>
                                                        <span class="sorting-icon">
                                                            <svg class="icon icon-down feather feather-chevron-down"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round"
                                                                 stroke-linejoin="round">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <ul class="sorting-lists list-unstyled m-0">
                                                        <li><a @click.prevent="setSorting('recommended')" href="#"
                                                               class="text_14">Рекомендуемые</a></li>
                                                        <li><a @click.prevent="setSorting('top_sail')" href="#"
                                                               class="text_14">Самый продаваемый</a></li>
                                                        <li><a @click.prevent="setSorting('alphabet_increase')" href="#"
                                                               class="text_14">По алфавиту, от А до Я</a></li>
                                                        <li><a @click.prevent="setSorting('alphabet_decrease')" href="#"
                                                               class="text_14">По алфавиту, от Я до А</a></li>
                                                        <li><a @click.prevent="setSorting('price_increase')" href="#"
                                                               class="text_14">Цена от низкой к высокой</a></li>
                                                        <li><a @click.prevent="setSorting('price_decrease')" href="#"
                                                               class="text_14">Цена от высокой к низкой</a></li>
                                                        <li><a @click.prevent="setSorting('date_increase')" href="#"
                                                               class="text_14">Дата, от старой к новой</a></li>
                                                        <li><a @click.prevent="setSorting('date_decrease')" href="#"
                                                               class="text_14">Дата, от новой к старой</a></li>
                                                    </ul>
                                                </div>
                                                <!-- <div-->
                                            </div>

                                        </div>
                                        <div class="product__view--mode__list">
                                            <div
                                                class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                                                <button class="product__grid--column__buttons--icons active"
                                                        aria-label="grid btn" data-toggle="tab"
                                                        data-target="#product_grid">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                         viewBox="0 0 9 9">
                                                        <g transform="translate(-1360 -479)">
                                                            <rect id="Rectangle_5725" data-name="Rectangle 5725"
                                                                  width="4" height="4" transform="translate(1360 479)"
                                                                  fill="currentColor"/>
                                                            <rect id="Rectangle_5727" data-name="Rectangle 5727"
                                                                  width="4" height="4" transform="translate(1360 484)"
                                                                  fill="currentColor"/>
                                                            <rect id="Rectangle_5726" data-name="Rectangle 5726"
                                                                  width="4" height="4" transform="translate(1365 479)"
                                                                  fill="currentColor"/>
                                                            <rect id="Rectangle_5728" data-name="Rectangle 5728"
                                                                  width="4" height="4" transform="translate(1365 484)"
                                                                  fill="currentColor"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <button class="product__grid--column__buttons--icons"
                                                        aria-label="list btn" data-toggle="tab"
                                                        data-target="#product_list">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                                         viewBox="0 0 13 8">
                                                        <g id="Group_14700" data-name="Group 14700"
                                                           transform="translate(-1376 -478)">
                                                            <g transform="translate(12 -2)">
                                                                <g id="Group_1326" data-name="Group 1326">
                                                                    <rect id="Rectangle_5729" data-name="Rectangle 5729"
                                                                          width="3" height="2"
                                                                          transform="translate(1364 483)"
                                                                          fill="currentColor"/>
                                                                    <rect id="Rectangle_5730" data-name="Rectangle 5730"
                                                                          width="9" height="2"
                                                                          transform="translate(1368 483)"
                                                                          fill="currentColor"/>
                                                                </g>
                                                                <g id="Group_1328" data-name="Group 1328"
                                                                   transform="translate(0 -3)">
                                                                    <rect id="Rectangle_5729-2"
                                                                          data-name="Rectangle 5729" width="3"
                                                                          height="2" transform="translate(1364 483)"
                                                                          fill="currentColor"/>
                                                                    <rect id="Rectangle_5730-2"
                                                                          data-name="Rectangle 5730" width="9"
                                                                          height="2" transform="translate(1368 483)"
                                                                          fill="currentColor"/>
                                                                </g>
                                                                <g id="Group_1327" data-name="Group 1327"
                                                                   transform="translate(0 -1)">
                                                                    <rect id="Rectangle_5731" data-name="Rectangle 5731"
                                                                          width="3" height="2"
                                                                          transform="translate(1364 487)"
                                                                          fill="currentColor"/>
                                                                    <rect id="Rectangle_5732" data-name="Rectangle 5732"
                                                                          width="9" height="2"
                                                                          transform="translate(1368 487)"
                                                                          fill="currentColor"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="product__showing--count">Showing 1–9 of 21 results</p>
                                </div>
                                <div class="collection-title-wrap d-flex align-items-end">
                                    <h2 class="collection-title heading_24 mb-0">Все товары</h2>
                                    <p class="collection-counter text_16 mb-0 ms-2">({{ products.total }} ед.)</p>
                                </div>

                                <Pagination class="mt-6" :products="products" :request_filter="request_filter"/>

                                <div class="tab_content">
                                    <div id="product_grid" class="tab_pane active show">
                                        <div class="product__section--inner">
                                            <div class="row mb--n30">
                                                <template v-for="product in products.data" :key="product.id">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                        <article class="product__card">
                                                            <div class="product__card--thumbnail">
                                                                <a class="product__card--thumbnail__link display-block"
                                                                    :href="route('site.product.show', product.slug)">
                                                                    <img
                                                                        class="product__card--thumbnail__img product__primary--img"
                                                                        :src="product.main_img"
                                                                        :alt="product.title">
                                                                    <img
                                                                        class="product__card--thumbnail__img product__secondary--img"
                                                                        :src="product.prev_img"
                                                                        :alt="product.title">
                                                                </a>
                                                                Категория:
                                                                {{ product.category ? product.category.title : 'Нет' }}
                                                                <span class="product__badge">-14%</span>
                                                                <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Quick View"
                                                                           @click="openModalProduct(product.slug)"
                                                                           data-open="modal1" href="javascript:void(0)">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="16"
                                                                                 height="16" viewBox="0 0 16 16"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <span class="visually-hidden">Подробнее</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Compare"
                                                                           href="compare.html">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="17"
                                                                                 height="17" viewBox="0 0 14 13"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                            <span
                                                                                class="visually-hidden">Сравнить</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Wishlist"
                                                                           href="wishlist.html">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="18"
                                                                                 height="18" viewBox="0 0 16 13"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                            <span
                                                                                class="visually-hidden">Избранное</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__card--content">
                                                                <ul class="rating product__card--rating d-flex">
                                                                    <li class="rating__list">
                                                                <span class="rating__icon">
                                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                            fill="currentColor"/>
                                                                    </svg>
                                                                </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                <span class="rating__icon">
                                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor"/>
                                                                    </svg>
                                                                </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                <span class="rating__icon">
                                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                        fill="currentColor"/>
                                                                    </svg>
                                                                </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                <span class="rating__icon">
                                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                            fill="currentColor"/>
                                                                     </svg>
                                                                </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                <span class="rating__icon">
                                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                            fill="currentColor"/>
                                                                     </svg>
                                                                </span>
                                                                    </li>
                                                                    <li>
                                                                    <span
                                                                        class="rating__review--text">(126) Review</span>
                                                                    </li>
                                                                </ul>
                                                                <h3 class="product__card--title">
                                                                    <a :href="route('site.product.show', product.slug)">{{
                                                                            product.title
                                                                        }}</a>
                                                                </h3>
                                                                <div class="product__card--price">
                                                                    <span class="current__price">${{
                                                                            product.price
                                                                        }}</span>
                                                                    <span class="old__price"> ${{
                                                                            product.old_price
                                                                        }}</span>
                                                                </div>
                                                                <div class="product__card--footer">
                                                                    <a class="product__card--btn primary__btn"
                                                                       href="cart.html">
                                                                        <svg width="14" height="11" viewBox="0 0 14 11"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z"
                                                                                fill="currentColor"/>
                                                                        </svg>
                                                                        Add to cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </template>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_list" class="tab_pane">
                                        <div class="product__section--inner product__section--style3__inner">
                                            <div class="row row-cols-1 mb--n30">

                                                <div class="col mb-30">
                                                    <template v-for="product in products.data" :key="product.id">
                                                        <div
                                                            class="product__card product__list d-flex align-items-center">
                                                            <div
                                                                class="product__card--thumbnail product__list--thumbnail">
                                                                <a class="product__card--thumbnail__link display-block"
                                                                   :href="route('site.product.show', product.slug)">
                                                                    <img
                                                                        class="product__card--thumbnail__img product__primary--img"
                                                                        :src="product.main_img"
                                                                        :alt="product.title">
                                                                    <img
                                                                        class="product__card--thumbnail__img product__secondary--img"
                                                                        :src="product.prev_img"
                                                                        :alt="product.title">
                                                                </a>
                                                                <span class="product__badge">-20%</span>
                                                                <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Quick View"
                                                                           @click="openModalProduct(product.slug)"
                                                                           data-open="modal1" href="javascript:void(0)">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="16"
                                                                                 height="16" viewBox="0 0 16 16"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <span
                                                                                class="visually-hidden">Подробнее</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Compare"
                                                                           href="compare.html">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="17"
                                                                                 height="17" viewBox="0 0 14 13"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                            <span
                                                                                class="visually-hidden">Сравнить</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn"
                                                                           title="Wishlist"
                                                                           href="wishlist.html">
                                                                            <svg class="product__card--action__btn--svg"
                                                                                 width="18"
                                                                                 height="18" viewBox="0 0 16 13"
                                                                                 fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z"
                                                                                    fill="currentColor"/>
                                                                            </svg>
                                                                            <span
                                                                                class="visually-hidden">Избранное</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__card--content product__list--content">
                                                                <h3 class="product__card--title"><a
                                                                    :href="route('site.product.show', product.slug)">{{ product.title }} </a>
                                                                </h3>
                                                                <ul class="rating product__card--rating d-flex">
                                                                    <li class="rating__list">
                                                                    <span class="rating__icon">
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                            fill="currentColor"/>
                                                                        </svg>
                                                                    </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                    <span class="rating__icon">
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                            fill="currentColor"/>
                                                                        </svg>
                                                                    </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                    <span class="rating__icon">
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                                            fill="currentColor"/>
                                                                        </svg>
                                                                    </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                    <span class="rating__icon">
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                                fill="currentColor"/>
                                                                            </svg>
                                                                    </span>
                                                                    </li>
                                                                    <li class="rating__list">
                                                                    <span class="rating__icon">
                                                                        <svg width="14" height="13" viewBox="0 0 14 13"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                                                fill="currentColor"/>
                                                                            </svg>
                                                                    </span>
                                                                    </li>
                                                                    <li>
                                                                        <span
                                                                            class="rating__review--text">(106) Review</span>
                                                                    </li>
                                                                </ul>
                                                                <div class="product__list--price">
                                                                    <span class="current__price"> ${{
                                                                            product.price
                                                                        }}</span>
                                                                    <span class="old__price"> ${{
                                                                            product.old_price
                                                                        }}</span>
                                                                </div>
                                                                <p>
                                                                    Категория:
                                                                    {{
                                                                        product.category ? product.category.title : 'Нет'
                                                                    }}
                                                                </p>
                                                                <p class="product__card--content__desc mb-20">
                                                                    {{ product.description }}</p>
                                                                <a class="product__card--btn primary__btn"
                                                                   href="cart.html">+ Add to cart</a>
                                                            </div>
                                                        </div>

                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <Pagination class="mt-6" :products="products" :request_filter="request_filter"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End shop section -->

        <ModalProduct :product="productModal"/>

    </StoreLayout>
</template>

<style scoped>

</style>
