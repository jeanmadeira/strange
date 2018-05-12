<template>
    <div>
        <h1 class="mt-5">Obrigado!</h1>
        <p class="lead">Responda esse questionario seu <code>lindo</code></p>
        <p>Segue o link
            <router-link :to="{ name: 'page.survey', params: { hash: link }}">User</router-link>
        </p>
    </div>
</template>
<script>
    import mixin from '../../config/mixin'

    export default {
        mixins: [mixin],
        data () {
            return {
                link: '99d0e45f-1b53-46d6-bafb-8687a441be0e',
                path: null,
                page: null
            }
        },
        mounted () {
            console.log(this.path)
        }
    }
</script>
