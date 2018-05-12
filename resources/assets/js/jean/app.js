import Vue from 'vue';
import router from './config/routes'
import './config/bootstrap'
import './config/components'

const app = new Vue({
    el: '#app',
    router
});
