<template>
    <Header/>
    <MasterPlan/>
    <Description/>
    <Footer/>
  </template>
  
  <script>
  import Header from '../Header.vue';
  import Footer from '../../home/Footer.vue'; 
import MasterPlan from './MasterPlan.vue';
import Description from './Description.vue';


  
  export default {
    components: {
      Header,
      Footer,
      MasterPlan,
      Description
    }
  };
  </script>
  