<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>{{ question }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <template v-for="(answer, index) in answers">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" v-bind:id="index">
                        <label class="custom-control-label" v-bind:for="index">{{ answer }}</label>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                question: 'Qual projeto você está realizando?',
                answers: [
                    'Construção',
                    'Reforma',
                    'Decoração'

                ]
            }
        }
    };
</script>

<style scoped>

</style>
