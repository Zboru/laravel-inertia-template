import { InertiaApp } from '@inertiajs/inertia-vue'
import pl from 'vuetify/es5/locale/pl';
import Vuetify from 'vuetify'
import Vue from 'vue'

Vue.use(Vuetify);
Vue.use(InertiaApp);

import Layout from "./Pages/Layout/Layout";
new Vue({
    vuetify: new Vuetify({
        lang: {
            locales: {pl},
            current: 'pl',
        },
    }),
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: (name) => {
                const module = require(`./Pages/${name}`);
                if (!module.default.layout) {
                    module.default.layout = Layout
                }
                return module.default
            }
        },
    }),
}).$mount('#app')
