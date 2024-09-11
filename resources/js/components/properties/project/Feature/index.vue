<template>
    <Header/>
    <SectionFeature/>
    <Amenities/>
    <Footer/>
  </template>
  
  <script>
  import Header from '../Header.vue';
  import Footer from '../../home/Footer.vue'; 
import SectionFeature from './SectionFeature.vue';
import Amenities from './Amenities.vue';
  
  export default {
    components: {
      Header,
      Footer,
      SectionFeature,
      Amenities,
    }
  };
  </script>
  