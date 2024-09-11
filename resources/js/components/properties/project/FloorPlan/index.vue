<template>
    <Header/>
    <FloorPlan/>
    <Description/>
    <Footer/>
  </template>
  
  <script>
  import Header from '../Header.vue';
  import Footer from '../../home/Footer.vue'; 
import FloorPlan from './FloorPlan.vue';
import Description from './Description.vue';

  
  export default {
    components: {
      Header,
      Footer,
      FloorPlan,
      Description
    }
  };
  </script>
  