import Home from './components/Home'
import Question from './components/PageComponent'

export default [
    { path: '/nps/home/', component: Home, name: 'Home' },
    { path: '/r/:hash', component: Question, name: 'question' }
];
