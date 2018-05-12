<template>
    <main role="main" class="container">
        <respondent-nps/>
        <hr>
        <respondent-text/>
        <hr>
        <respondent-matriz/>
        <hr>
        <respondent-nps-product/>
        <hr>
        <respondent-boolean/>
        <hr>
        <respondent-feeling/>
        <hr>
        <respondent-multiple/>
        <button v-on:click="counter">sa</button>
    </main>
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
    };
</script>

<style scoped>
</style>
