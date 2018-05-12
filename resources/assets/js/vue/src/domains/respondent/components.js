import Vue from 'vue'
import Home from './components/Home'
import Page from './components/PageComponent'
import Nps from '../../../../jean/components/questions/NpsComponent'
import Text from '../../../../jean/components/questions/TextComponent'
import Matriz from '../../../../jean/components/questions/MatrizComponent'
import NpsProduct from '../../../../jean/components/questions/NpsProductComponent'
import Boolean from '../../../../jean/components/questions/BooleanComponent'
import Feeling from '../../../../jean/components/questions/FeelingComponent'
import Multiple from '../../../../jean/components/questions/MultipleComponent'

Vue.component('respondent-home', Home);
Vue.component('respondent-page', Page);
Vue.component('respondent-nps', Nps);
Vue.component('respondent-text', Text);
Vue.component('respondent-matriz', Matriz);
Vue.component('respondent-nps-product', NpsProduct);
Vue.component('respondent-boolean', Boolean);
Vue.component('respondent-feeling', Feeling);
Vue.component('respondent-multiple', Multiple);
