<template>
    <Header/>
    <Special/>
    <Deacription/>
    <Footer/>
  </template>
  
  <script>
  import Header from '../Header.vue';
  import Footer from '../../home/Footer.vue'; 
import Deacription from './description.vue';
import Special from './special.vue';
  
  export default {
    components: {
      Header,
      Footer,
      Special,
      Deacription,
    }
  };
  </script>
  