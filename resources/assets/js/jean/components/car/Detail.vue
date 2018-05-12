<template>
    <div>
        <h1>{{ name }}</h1>
        <img v-bind:src="url">
        <h4>{{ price }}</h4>
        <router-link to="/">Home</router-link>
        <router-link :to="{ name: 'page.survey', params: { hash: '99d0e45f-1b53-46d6-bafb-8687a441be0e' }}">Questionario</router-link>
    </div>
</template>
<script>
    import mixin from '../../config/mixin';

    export default {
        mixins: [mixin],
        data () {
            return {
                name: null,
                url: null,
                price: null
            }
        }
    };
</script>
