<script>
import {Link} from '@inertiajs/vue3';

export default {

    name: 'Pagination',

    components: {
        Link,
    },

    props: {
        links: Array,
    },

    methods: {
        convertString(str) {
            str = str.replace("&laquo;", "«");
            str = str.replace("&raquo;", "»");

            return str;
        }
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
                      :href="link.url">
                    {{ convertString(link.label) }}
                </Link>
            </template>
        </div>
    </div>


</template>
