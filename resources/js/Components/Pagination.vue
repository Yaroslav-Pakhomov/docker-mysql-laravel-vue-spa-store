<script>
import {Link} from '@inertiajs/vue3';

export default {

    name: 'Pagination',

    components: {
        Link,
    },

    props: {
        links: Array,
        // Объект с выбранными значениями
        request_filter: Object,
    },

    mounted() {

    },

    methods: {
        convertString(str) {
            str = str.replace("&laquo;", "«");
            str = str.replace("&raquo;", "»");

            return str;
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
    },
};

</script>

<template>

    <div v-if="links.length > 3">
        <div class="flex flex-wrap my-5 text-center">
            <template v-for="(link, p) in links" :key="p">
                <div v-if="link.url === null"
                     class="d-inline-block w-auto mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                     v-html="link.label"/>

                <Link v-else
                      class="mx-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                      :class="link.active ? ' bg-danger text__black' : ''"
                      :href="link.url"
                      method="get" :data="request_filter">
                    {{ convertString(link.label) }}
                </Link>
            </template>
        </div>
    </div>


</template>
