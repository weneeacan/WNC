import { createApp } from 'vue'
import App from './App.vue'
import { store } from "./store.js"
import router from './router'
import './assets/tailwind.css'
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
createApp(App).use(router).use(store).mount('#app')
