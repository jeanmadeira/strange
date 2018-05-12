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
                <nav>
                    <ul class="pagination pagination-lg">
                        <template v-for="index in answers">
                            <li class="page-item">
                                <a class="page-link" href="#">{{ index }}</a>
                            </li>
                        </template>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                question: 'Se SIM, qual o grau de satisfação com o atendimento?',
                answers: [
                    'Muito Insatisfeito',
                    'Insatisfeito',
                    'Satisfeito',
                    'Muito Satisfeito'
                ]
            }
        }
    };
</script>

<style scoped>

</style>
