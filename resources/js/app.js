import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router';
import axios from 'axios';
import '@/assets/css/sb-admin-2.min.css';
import i18n from './i18n'; // Import the i18n configuration

// Set axios as the default HTTP client
const app = createApp(App);
app.config.globalProperties.$http = axios;

// Use i18n and router in the app
app.use(i18n); // Add the i18n instance
app.use(router);

app.mount('#app');
