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
                    <tbody>
                    <template v-for="product in products">
                        <tr>
                            <th scope="row">{{ product }}</th>
                            <td>
                                <div class="col-md-12">
                                    <nav>
                                        <ul class="pagination pagination-lg">
                                            <template v-for="index in 10">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">{{ index }}</a>
                                                </li>
                                            </template>
                                        </ul>
                                    </nav>
                                </div>
                            </td>
                        </tr>
                        <tr class="col-md-12">
                            <td class="col-md-12">
                                <div class="form-group">
                                    <label>{{ questionProduct }}</label>
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>
                    </template>
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
                question: 'Pensando no produto que você adquiriu, qual a probabilidade de você indicar este(s) produto(s) que você comprou para um amigo ou colega?',
                products: [
                    'Product A',
                    'Product B',
                    'Product C'
                ],
                questionProduct: 'Qual o principal motivo por você ter dado essa nota? Assim, você nos ajuda a continuar melhorando.'
            }
        }
    };
</script>

<style scoped>
</style>
