require('./bootstrap');

require('alpinejs');

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { trans } from "matice"


Vue.mixin({
    methods: {
        route: window.route,
        $trans: trans
    }
})

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
