import Vue from 'vue'
import Router from 'vue-router'
import RespondentRoutes from '../domains/respondent/routes'

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [...RespondentRoutes]
})
