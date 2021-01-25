import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from './components/LoginComponent.vue';
import Dashboard from './components/Dashboard.vue';
import Register from './components/Register.vue';


const routes = [
    {
        path: '/',
        name: 'Home',
        redirect: '/login'
    },
    {
        path: '/',
        name: 'Login',
        component: Login,
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
    },
]

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router;
