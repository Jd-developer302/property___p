<template>
    <section>
      <div class="container-xxl">
        <div class="row">
          <div class="col">
            <div class="sec-heading mx-auto">
              <h1>COMMUNITIES</h1>
              <p>Explore new and upcoming communities of Dubai, Abu Dhabi, and Sharjah.</p>
            </div>
          </div>
        </div>
        <div class="image-container">
          <div class="image-left-column">
          <ImageLeft/>
          </div>
  
          <div class="image-center">
            <CenterImage/>
          </div>
  
          <div class="image-right-column">
            <ImageRight/>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import { ref } from 'vue';
  import ImageLeft from './communities/image-left.vue';
  import LeftTopPath from '@/assets/img/11.jpg';
  import RightTopPath from '@/assets/img/44.jpg';
  import LeftBottomPath from '@/assets/img/22.jpg';
  import RightBottomPath from '@/assets/img/55.jpg';
  import CenterImagePath from '@/assets/img/33.jpg';
import ImageRight from './communities/image-right.vue';
import CenterImage from './communities/CenterImage.vue';

  
  export default {
    components:{
      ImageLeft,
      ImageRight,
      CenterImage
    },
    setup() {
      const LeftTop = ref(LeftTopPath);
      const RightTop = ref(RightTopPath);
      const LeftBottom = ref(LeftBottomPath);
      const RightBottom = ref(RightBottomPath);
      const CenterImage = ref(CenterImagePath);
  
      return {
        LeftTop,
        RightTop,
        LeftBottom,
        RightBottom,
        CenterImage,
      };
    },
  };
  </script>
  
  <style scoped>
 
  
  .sec-heading {
    margin-bottom: 20px;
  }
  
  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 10px;
    line-height: 36px;
    font-size: 24px;
    font-weight: 600;
    color: #9c3133;
    font-family: 'Montserrat', sans-serif;
  }
  
  .sec-heading p {
    color: #000;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }
  
  .image-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  
  .image-left-column,
  .image-right-column {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 20%;
  }
  
  .image-left-top,
  .image-right-top,
  .image-left-bottom,
  .image-right-bottom {
    width: 100%;
  }
  
  .image-left-top,
  .image-right-top {
    height: 50%;
  }
  
  .image-left-bottom,
  .image-right-bottom {
    height: 50%;
    margin-top: 10px;
  }
  
  .image-center {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
    border-radius: 15px;
  }
  
  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  @media (max-width:1400px){
    section{
      margin-left: 15px;
      margin-right: 15px;
    }
  }
  @media (max-width: 992px) {
    .image-container {
      flex-direction: column;
      align-items: stretch;
    }
  
    .image-left-column,
    .image-right-column,
    .image-center {
      width: 100%;
      margin-bottom: 10px;
    }
  
    .image-left-column,
    .image-right-column {
      flex-direction: row;
    }
  
    .image-left-top,
    .image-left-bottom,
    .image-right-top,
    .image-right-bottom {
      height: auto;
      margin: 0 5px;
    }
  
    .image-center img {
      border-radius: 0;
    }
  }
  </style>
  