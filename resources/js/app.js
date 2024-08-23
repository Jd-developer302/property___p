import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router';
import axios from 'axios';
import '@/assets/css/sb-admin-2.min.css'; 


// Set axios as the default HTTP client
const app = createApp(App);
app.config.globalProperties.$http = axios;

app.use(router).mount('#app');
