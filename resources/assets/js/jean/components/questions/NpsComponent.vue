<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>{{ localQuestion }}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class="float-left">Nem um pouco provável</span>
                <span class="float-right">Extremamente provável</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <ul class="pagination pagination-lg">
                        <template v-for="index in 10">
                            <li class="page-item">
                                <a class="page-link" @click="teste(index)">{{ index }}</a>
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
        props: {
            question: {
                type: String,
                required: true
            }
        },
        data () {
            return {
                localQuestion: this.question,
                nps: {
                    questionId: null,
                    questionAnswer: null
                }
            };
        },
        methods: {
            teste: (index) => {
                this.nps = {
                    questionId: 1,
                    questionAnswer: index
                }
                this.$emit('getAnswer', this.nps);
            }
        }
    };
</script>
