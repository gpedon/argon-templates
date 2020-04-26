/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Partials
// Form elements
Vue.component(
    'form-input',
    require('./components/partials/form/Input.vue').default
);
Vue.component(
  'form-money',
  require('./components/partials/form/Money.vue').default
);
Vue.component(
  'form-input-mask',
  require('./components/partials/form/Mask.vue').default
);
Vue.component(
    'form-select',
    require('./components/partials/form/Select.vue').default
);
Vue.component(
    'form-date',
    require('./components/partials/form/Date.vue').default
);
Vue.component(
    'form-checkbox',
    require('./components/partials/form/Checkbox.vue').default
);
Vue.component(
    'form-radio',
    require('./components/partials/form/Radio.vue').default
);
Vue.component(
    'form-textarea',
    require('./components/partials/form/Textarea.vue').default
);
Vue.component(
    'form-toggle',
    require('./components/partials/form/Toggle.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
