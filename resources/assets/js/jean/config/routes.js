import Vue from 'vue'
import VueRouter from 'vue-router';
import Car from '../components/car/config/routes'
import Page from '../components/page/config/routes'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [...Car, ...Page]
});

export default router
