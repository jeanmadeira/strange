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
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <template v-for="column in columns">
                            <th scope="col">{{ column }}</th>
                        </template>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="answer in answers">
                        <th scope="row">{{ answer }}</th>

                        <td v-for="countColumns in columns.length"><input type="radio"/></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                question: 'Com relação a sua experiência de compra conosco, qual o seu nível de satisfação quanto aos seguintes aspectos:',
                answers: [
                    'Preço dos produtos',
                    'Clareza das informações sobre o produto/oferta (descrição detalhada, fotos e avaliações de outros compradores)',
                    'Custo do frete',
                    'Prazo de entrega oferecido no ato da compra (carrinho)'
                ],
                columns: [
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
