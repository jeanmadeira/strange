<template>
    <div>
        <common-header/>
        <main role="main" class="container">
            <h1 class="mt-5">Obrigado!</h1>
            <p class="lead">Responda esse questionario seu <code>lindo</code></p>
            <p>Segue o link
                <router-link :to="{ name: 'question', params: { hash: link }}">User</router-link>
            </p>
        </main>
        <common-footer/>
    </div>

</template>
<script>
    import mixin from '../../../assets/js/mixin'

    export default {
        mixins: [mixin],
        data () {
            return {
                link: '99d0e45f-1b53-46d6-bafb-8687a441be0e',
                path: null,
                page: null
            }
        },
        methods: {
            counter: () => {
                console.log(this.path);
            }
        }
    }
</script>

<style scoped>
    .container {
        padding: 60px 15px 0;
    }
</style>
