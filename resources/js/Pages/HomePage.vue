<script>
import {Head, Link} from '@inertiajs/vue3';
import StoreLayout from "@/Layouts/StoreLayout.vue";
export default {
    // Название компонента
    name: 'HomePage',

    components: {
        Head,
        Link,
        StoreLayout,
    },

    data() {
        return {
            a: 'Привет',
        }
    },

    methods: {},

    computed: {},

}

</script>

<template>
    <StoreLayout>

    HomePage.vue
    {{ a }}
    Я

    </StoreLayout>
</template>

<style scoped>

</style>
