require('./bootstrap');

require('alpinejs');

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'

Vue.mixin({ methods: { route: window.route } })

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})
