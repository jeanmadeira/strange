<template>
    <div>
        <question-nps @getAnswer='handlerAnswer($event)' question="Jean"/>
        <!--<hr>-->
        <!--<question-text/>-->
        <!--<hr>-->
        <!--<question-matriz/>-->
        <!--<hr>-->
        <!--<question-nps-product/>-->
        <!--<hr>-->
        <!--<question-boolean/>-->
        <!--<hr>-->
        <!--<question-feeling/>-->
        <!--<hr>-->
        <!--<question-multiple/>-->
    </div>
</template>
<script>
    import mixin from '../../config/mixin';

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
            handlerAnswer: (e) => {
                console.log('a', e)
            }
        }
    };
</script>
