<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>{{ question }}</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                question: 'Qual o principal motivo por você ter dado essa nota? Assim, você nos ajuda a continuar melhorando.'
            }
        }
    };
</script>

<style scoped>

</style>
