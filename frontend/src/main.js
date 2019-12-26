import Vue from 'vue'
import App from './App.vue'
import router from './router'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import LoadScript from 'vue-plugin-load-script';
import Vuelidate from "vuelidate";

Vue.use(Vuelidate);

Vue.use(LoadScript);
Vue.loadScript("https://kit.fontawesome.com/9feb37905a.js");
// Vue.loadScript("assets/js/login-sign-form.js");

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
