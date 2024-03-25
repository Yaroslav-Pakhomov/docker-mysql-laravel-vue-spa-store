<script>

export default {

    name: 'Filter',

    components: {},

    /**
     * Передаваемые св-ва от родителя и/или от контроллера
     */
    props: {
        // Объект с выбранными значениями
        request_filter: Object,
    },

    /**
     * Св-ва компонента
     */
    data() {
        return {
            // Значения для фильтра
            min_price : null,
            max_price : null,
            categories: [],
            colors    : [],
            tags      : [],

            // Выбранные значения для фильтра
            min_price_filter  : null,
            max_price_filter  : null,
            categories_checked: [],
            colors_checked    : [],
            tags_checked      : [],
        }
    },

    mounted() {
        // Имитация события изменения в теге body
        let body = document.querySelector('body');
        let event_change = new Event('change');
        body.dispatchEvent(event_change);

        this.getAllFilters();
    },

    methods: {

        /**
         * Все параметры фильтра
         */
        getAllFilters() {
            axios.get(this.route('site.filter.index'))
                .then(res => {
                    let result = res.data;
                    this.max_price = result.max_price;
                    this.min_price = result.min_price;
                    this.categories = result.categories;
                    this.colors = result.colors;
                    this.tags = result.tags;

                    this.checkFilters();
                });
        },

        /**
         * Обработчик клика фильтра категории
         */
        clickCategory(id) {
            this.toggleCategory(id);
            this.getFilterProducts();
        },

        /**
         * Обработчик клика фильтра цвета
         */
        clickColor(id) {
            this.toggleColor(id);
            this.getFilterProducts();
        },

        /**
         * Обработчик клика фильтра теги
         */
        clickTag(id) {
            this.toggleTag(id);
            this.getFilterProducts();
        },

        /**
         * Переключатель категории
         */
        toggleCategory(id) {
            this.toggleParam(id, this.categories_checked);
        },

        /**
         * Переключатель цвета
         */
        toggleColor(id) {
            this.toggleParam(id, this.colors_checked);
        },

        /**
         * Переключатель тегов
         */
        toggleTag(id) {
            this.toggleParam(id, this.tags_checked);
        },

        /**
         * Переключатель передаваемого параметра
         */
        toggleParam(id, params_checked) {
            this.inObj(id, params_checked) ? this.removeElemObj(id, params_checked) : params_checked.push(id);
        },

        /**
         * Проверка существования элемента в массиве
         */
        inObj(needle, haystack) {
            let length = haystack.length;
            for (let i = 0; i < length; i++) {
                if (Number(haystack[i]) === Number(needle)) return true;
            }
            return false;
        },

        /**
         * Удаление элемента из объекта
         */
        removeElemObj(item, obj) {
            for (let param in obj) {
                if (+obj[param] === +item) {
                    delete obj[param];
                }
            }
        },

        /**
         * Вызов страницы с учётом всех фильтров
         */
        getFilterProducts() {
            let condition_min = this.max_price < this.min_price_filter || this.min_price_filter < this.min_price || (this.max_price_filter && this.min_price_filter > this.max_price_filter && this.max_price_filter.length > 0);
            let condition_max = this.max_price < this.max_price_filter || this.max_price_filter < this.min_price || (this.min_price_filter && this.min_price_filter > this.max_price_filter && this.min_price_filter.length > 0);

            let price_from = condition_min ? this.min_price : this.min_price_filter;
            let price_to = condition_max ? this.max_price : this.max_price_filter;

            let filter_params = {
                'categories_checked': this.categories_checked,
                'colors_checked'    : this.colors_checked,
                'tags_checked'      : this.tags_checked,
                'price_from'        : price_from,
                'price_to'          : price_to,
            };

            this.$inertia.get('/shop', filter_params);
        },

        /**
         * Проверка на фильтрацию товаров
         */
        checkFilters() {
            for (let param in this.request_filter) {
                if (param === 'categories_checked') {
                    for (let category in this.request_filter[param]) {
                        this.toggleParam(this.request_filter[param][category], this.categories_checked);
                    }
                }

                if (param === 'colors_checked') {
                    for (let color in this.request_filter[param]) {
                        this.toggleParam(this.request_filter[param][color], this.colors_checked);
                    }
                }

                if (param === 'tags_checked') {
                    for (let tag in this.request_filter[param]) {
                        this.toggleParam(this.request_filter[param][tag], this.tags_checked);
                    }
                }

                if (param === 'price_from') {
                    this.min_price_filter = +this.min_price !== +this.request_filter[param] ? +this.request_filter[param] : null;
                }

                if (param === 'price_to') {
                    this.max_price_filter = +this.max_price !== +this.request_filter[param] ? +this.request_filter[param] : null;
                }
            }
        },

        /**
         * Сброс всех фильтров
         */
        resetFilters() {
            this.$inertia.get('/shop');
        }
    },
};

</script>

<template>

    <div class="shop__sidebar--widget widget__area d-none d-lg-block">
        <h3>Фильтры</h3>
        <div class="single__widget widget__bg">
            <div
                class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                data-bs-toggle="collapse" data-bs-target="#filter-collection">
                Категории
                <span class="faq-heading-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </div>
            <div id="filter-collection" class="accordion-collapse collapse show">
                <ul class="filter-lists list-unstyled mb-0">
                    <template v-for="category in categories">
                        <li class="filter-item">
                            <label class="filter-label">
                                <input type="checkbox" name="category_filter"
                                       :checked="inObj(category.id, categories_checked)"
                                       @click="clickCategory(category.id)"/>
                                <span class="filter-checkbox rounded me-2"></span>
                                <span class="filter-text">{{ category.title }}</span>
                            </label>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
        <div class="single__widget widget__bg filter-widget filter-color">
            <div
                class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                data-bs-toggle="collapse" data-bs-target="#filter-color">
                Цвета
                <span class="faq-heading-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </div>
            <div id="filter-color" class="accordion-collapse collapse show">
                <ul class="filter-lists list-unstyled mb-0">
                    <template v-for="color in colors">
                        <li class="filter-item">
                            <label class="filter-label" :style="{backgroundColor: color.code}">
                                <input type="checkbox" name="color_filter"
                                       :checked="inObj(color.id, colors_checked)"
                                       @click="clickColor(color.id)"/>
                                <span class="filter-checkbox rounded me-2"></span>
                            </label>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
        <div class="single__widget price__filter widget__bg">
            <div
                class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                data-bs-toggle="collapse" data-bs-target="#filter-price">
                Цена
                <span class="faq-heading-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </div>
            <div id="filter-price" class="accordion-collapse collapse show">
                <form class="price__filter--form" action="#">
                    <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-GTE2">От</label>
                            <div
                                class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">$</span>
                                <input class="price__filter--input__field border-0"
                                       name="min_price_filter" id="Filter-Price-GTE2"
                                       type="number" v-model="min_price_filter"
                                       :placeholder="Math.floor(min_price)"
                                       :min="Math.floor(min_price)"
                                       :max="Math.ceil(max_price)">
                            </div>
                        </div>
                        <div class="price__divider">
                            <span>-</span>
                        </div>
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-LTE2">До</label>
                            <div
                                class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">$</span>
                                <input class="price__filter--input__field border-0"
                                       name="max_price_filter" id="Filter-Price-LTE2"
                                       type="number" v-model="max_price_filter"
                                       :placeholder="Math.ceil(max_price)"
                                       :min="Math.floor(min_price)"
                                       :max="Math.ceil(max_price)">
                            </div>
                        </div>
                    </div>
                    <button @click.prevent="getFilterProducts()"
                            class="primary__btn price__filter--btn" type="submit">Фильтровать
                    </button>
                </form>
            </div>
        </div>
        <div class="single__widget widget__bg filter-widget">
            <div
                class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                data-bs-toggle="collapse" data-bs-target="#filter-vendor">
                Теги
                <span class="faq-heading-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </div>
            <div id="filter-vendor" class="accordion-collapse collapse show">
                <ul class="filter-lists list-unstyled mb-0">
                    <template v-for="tag in tags">
                        <li class="filter-item">
                            <label class="filter-label">
                                <input type="checkbox" name="tag_filter"
                                       :checked="inObj(tag.id, tags_checked)"
                                       @click="clickTag(tag.id)"/>
                                <span class="filter-checkbox rounded me-2"></span>
                                <span class="filter-text">{{ tag.title }}</span>
                            </label>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
        <div class="single__widget widget__bg filter-widget">
            <button @click.prevent="resetFilters()"
                    class="primary__btn price__filter--btn mb-3" type="submit">Сбросить фильтры
            </button>
        </div>
    </div>

</template>
