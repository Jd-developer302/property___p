<template>
    <section>
      <div class="container-xxl mb-3">
        <div class="row">
          <div class="col">
            <div class="sec-heading mx-auto">
              <h1>NEAR COMPLETION PROJECTS</h1>
              <p>Looking for immediate possession - Here are some of newly built proper</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" v-for="(image, index) in images" :key="index">
            <div class="image-with-logo">
              <img :src="image.imageSrc" :alt="'Image ' + (index + 1)" class="main-image" />
              <div class="overlay">
                <img :src="image.logoSrc" alt="Logo" class="logo" />
                <div class="text-content">
                  <h2 class="heading">{{ image.heading }}</h2>
                  <p class="paragraph">{{ image.paragraph }}</p>
                </div>
              </div>
            </div>
            <div class="info-text d-flex justify-content-between">
              <h1>{{ image.text1 }}</h1>
              <h2>{{ image.text2 }}</h2>
            </div>
            <div class="info-text2 d-flex justify-content-between">
              <h1>{{ image.text3 }}</h1>
              <h2>{{ image.text4 }}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import { ref } from 'vue';
  import imageSrcPath1 from '@/assets/img/1.1.jpg';
  import imageSrcPath2 from '@/assets/img/2.2.jpg';
  import imageSrcPath3 from '@/assets/img/3.3.jpg';
  import logoSrcPath from '@/assets/img/INSha-Updated-logo.jpg';
  
  export default {
    name: 'ImageWithLogoSection',
    setup() {
      const images = ref([
        {
          imageSrc: imageSrcPath1,
          logoSrc: logoSrcPath,
          heading: 'Damac Golf Gate',
          paragraph: 'Al Hebiah Third',
          text1: '50/50',
          text2: 'Q4 - 2004',
          text3: 'Payment Plan',
          text4: 'Handover'
        },
        {
          imageSrc: imageSrcPath2,
          logoSrc: logoSrcPath,
          heading: 'EBH',
          paragraph: 'Palm Jumeirah',
          text1: '50/50',
          text2: 'Q4 - 2004',
          text3: 'Payment Plan',
          text4: 'Handover'
        },
        {
          imageSrc: imageSrcPath3,
          logoSrc: logoSrcPath,
          heading: 'Oakley Square',
          paragraph: 'Al Barsha South Fourth',
          text1: '50/50',
          text2: 'Q4 - 2004',
          text3: 'Payment Plan',
          text4: 'Handover'
        },
      ]);
  
      return {
        images,
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
  margin-bottom: 2px;
  line-height: 36px;
  font-size: 24px;
  font-weight: 600;
  color: #9C3133;
  font-family: 'Montserrat', sans-serif;
}

.sec-heading p {
  color: #000;
  font-size: 20px;
  font-weight: 500;
  font-family: 'Montserrat', sans-serif;
}

.images-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
  .image-with-logo {
    position: relative;
    display: block;
    margin-bottom: 20px;
  }
  
  .main-image {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 8px;
  }
  
  .overlay {
    position: absolute;
    top: 290px;
    left: 0;
    display: flex;
    align-items: center;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
  }
  
  .logo {
    width: 100px;
    height: 100px;
    position: relative;
    z-index: 1;
  }
  
  .text-content {
    color: #000;
    margin-top: 30px;
    margin-left: 15px;
  }
  
  .heading {
    font-size: 1.2rem;
    margin: 0;
  }
  
  .paragraph {
    font-size: 0.9rem;
    margin: 5px 0 0;
  }
  .info-text{
    padding-left: 20px;
    padding-right: 40px;
    margin-top: 100px;
  }
  .info-text h1{
    font-size: 15px;
    color: #000;
  }
  .info-text h2{
    font-size: 15px;
    color: #000;
  }
  .info-text2{
    padding-left: 20px;
    padding-right: 40px;
  }
  .info-text2 h1{
    font-size: 15px;
    color: #000;
  }
  .info-text2 h2{
    font-size: 15px;
    color: #000;
  }
  /* Responsive Styles */
  @media (max-width:1400px){
    section{
      margin-left: 15px;
      margin-right: 15px;
    }
  }
  @media (max-width: 1280px){}
  @media (max-width: 1200px){
    .overlay{
        top: 200px;
    }
  }
  @media (max-width: 992px){
    .overlay{
        top: 125px;
    }
  }
  @media (max-width: 768px) {
    .overlay{
        top: 130px;
    }
    .heading {
      font-size: 1rem;
    }
  
    .paragraph {
      font-size: 0.8rem;
    }
  
    .logo {
      width: 100px;
    }
  }
  
  @media (max-width: 576px) {
    .overlay{
        top: 270px;
    }
    .heading {
      font-size: 0.9rem;
    }
  
    .paragraph {
      font-size: 0.7rem;
    }
  
    .logo {
      width: 100px;
    }
  }
  @media (max-width: 545px){
    .overlay{
        top: 355px;
    }
  }
  @media (max-width: 415px){
    .overlay{
        top: 260px;
    }
  }
  @media (max-width: 390px){
    .overlay{
        top: 230px;
    }
  }
  </style>
  