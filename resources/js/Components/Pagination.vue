<script>
import {Link} from '@inertiajs/vue3';

/**
 * @typedef {Object} products
 * @property {Number} current_page
 * @property {Number} last_page
 * @typedef {Object} products.links
 * @property {Number} length
 */

export default {

    name: 'Pagination',

    components: {
        Link,
    },

    props: {
        products: Object,
        // Объект с выбранными значениями фильтра и сортировки
        request_filter: Object,
    },

    mounted() {
        console.log(this.products);
        // console.log(this.links);
    },

    methods: {
        convertString(str) {
            str = str.replace("&laquo;", "«");
            str = str.replace("&raquo;", "»");

            return str;
        },

    },
};

</script>

<template>

    <div v-if="products.links.length > 3">
        <div class="flex flex-wrap my-5 text-center">
            <template v-for="(link, p) in products.links" :key="p">
                <div v-if="link.url === null"
                     class="d-inline-block w-auto mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                     v-html="link.label"/>
                <Link
                    v-if="!Number(link.label) && link.url !== null || +(link.label) && (products.current_page - +(link.label) < 2 && products.current_page - +(link.label) > -2) || +link.label === 1 || +link.label === products.last_page"
                    class="mx-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                    :class="link.active ? ' bg-danger text__black' : ''"
                    :href="link.url"
                    method="get" :data="request_filter">
                    {{ convertString(link.label) }}
                </Link>
                <div v-if=" +(link.label) && +products.current_page !== 3 && (products.current_page - +(link.label) === 2)
                ||
                +(link.label) && +products.current_page + 2 !== +products.last_page && (products.current_page - +(link.label) === -2) "
                     class="d-inline-block w-auto mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded">
                    ...
                </div>
            </template>
        </div>
    </div>

</template>
