import Page from '../Page'
import Home from '../Home'

const routes = [
    {path: '/nps/home', component: Home, name: 'page.home'},
    {path: '/r/:hash', component: Page, name: 'page.survey'}
]

export default routes
