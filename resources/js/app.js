window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import { createApp} from 'vue';
const app = new Vue({
    el: '#app',
});

//register the component


//..HTML element to mount the Vue application
app.mount('#app');

require('./bootstrap');
