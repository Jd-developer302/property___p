<template>
    <Header/>
    <Location/>
    <Deacription/>
    <Footer/>
  </template>
  
  <script>
  import Header from '../Header.vue';
  import Footer from '../../home/Footer.vue'; 
  import Location from './locations.vue';
import Deacription from './Deacription.vue';
  
  export default {
    components: {
      Header,
      Footer,
      Location,
      Deacription,
    }
  };
  </script>
  