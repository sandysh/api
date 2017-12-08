
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const Vue = require('vue');
const VueRouter = require('vue-router').default;
const VueResource = require('vue-resource').default;
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.component('vue-user-pagination', require('./components/User-Table.vue'));
Vue.component('vue-pagination', require('./components/Pagination.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const Default = { template: '<div>This is default page</div>' }
import routes from './routes';
// console.log(routes);

const  app = new Vue({
    el: '#app',
    data: {
        counter: 0,
        pagination: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 4,
    },
});
// var router = new VueRouter({
//     // mode: 'history',
//   routes // short for `routes: routes`
// })

// const app = new Vue({
//   router
// }).$mount('#app')