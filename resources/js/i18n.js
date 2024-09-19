import { createI18n } from 'vue-i18n';

// Import your locale messages
import en from './locales/en.json';
import fr from './locales/fr.json';
import es from './locales/es.json';
import zh from './locales/zh.json';
import ru from './locales/ru.json';

// Create the i18n instance
const i18n = createI18n({
  legacy: false, 
  locale: localStorage.getItem('locale'), 
  fallbackLocale: 'en',
  messages: {
    en,
    fr,
    es,
    zh,
    ru,
  },
});

export default i18n;
