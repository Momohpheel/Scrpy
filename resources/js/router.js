import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Login from './components/Pages/LoginPage.vue';
import Dashboard from './components/Pages/Dashboard.vue';
import Register from './components/Pages/Register.vue';


const routes = [
    // {
    //     path: '/',
    //     name: 'Home',
    //     redirect: '/login'
    // },
    {
        path: '/',
        component: Login
    },
    {
        path: '/signup',
        name: 'Signup',
        component: Register,
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard,
    }
]

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router;
